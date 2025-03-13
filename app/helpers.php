<?php

function renderView(string $pageName, array $data = []) : string
{
    $file = DOCUMENT_ROOT . '/resources/view/' . $pageName;

    if (file_exists($file)) {
        extract($data);
        ob_start();
        include $file;
        return ob_get_clean();
    }

    header('HTTP/1.1 500 Internal Server Error');
    return 'Error: ' . $pageName . ' not found';
}

function includeCSS(array $modules) : void
{
    foreach ($modules as $module) {
        $GLOBALS['css_modules'][] = $module;
    }
}

function compressCSS($buffer) : string
{
    $buffer = preg_replace("!/\*[^*]*\*+([^/][^*]*\*+)*/!", "", $buffer);
    return str_replace(array("\r\n", "\r", "\n", "\t", "  ", "    ", "    "), "", $buffer);
}

function printCSS() : void
{
    ob_start("compressCSS");
    foreach ($GLOBALS['css_modules'] as $module) {
        $module = DOCUMENT_ROOT . '/public/themes/v3/css/' . $module . '.css';
        if (file_exists($module)) {
            echo file_get_contents($module);
        }
    }
    ob_end_flush();
}



function deletedPages() : array
{
    return [
        'ru/site',
        'ru/projects',
        'ru/portfolio'
    ];
}

function getLocale($url = null) : ?string
{
    if ($url === null) {
        $url = $_SERVER['REQUEST_URI'];
    }

    $parsedUrl = parse_url($url);
    if (!isset($parsedUrl['path'])) {
        return null;
    }

    $pathParts = explode('/', trim($parsedUrl['path'], '/'));

    if (!empty($pathParts[0])) {
        return $pathParts[0];
    }

    return 'en';
}


function getEnvValue($key, $default = null) : string
{
    $lines = file(__DIR__ . '/../.env', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $env = [];
    foreach ($lines as $line) {
        list($envKey, $envValue) = explode('=', $line, 2);
        $env[trim($envKey)] = trim($envValue);
    }
    return $env[$key] ?? $default;
}

function dd(...$args): void
{
    echo '<pre style="background: #2d2d2d; color: #fff; padding: 10px; border-radius: 5px; font-size: 14px; white-space: pre-wrap;">';
    foreach ($args as $arg) {
        ob_start();
        var_dump($arg); // Получаем строку вывода var_dump
        $output = ob_get_clean();
        echo htmlspecialchars($output); // Преобразуем HTML-спецсимволы
    }
    echo '</pre>';
    exit;
}


function emptyStrToNull($data) : string|array|null
{
    if (is_array($data)) {
        foreach ($data as $key => $value) {
            if($value == '') {
                $data[$key] = null;
            }
        }

    } elseif (gettype($data) == 'string') {
        if ($data == '') {
            $data = null;
        }
    }

    if ($data == '-') return null;

    return $data;
}

function contentRender(string $content) : string
{
    return $content;
}

function getDateByLang(string $date, string $lang = 'ru') : string
{
    // input 2023-04-03 00:00:00
    // return example 3 апреля 2023
    $months = include DOCUMENT_ROOT . 'resources/lang/' . $lang . '/month.php';

    $date = date_parse_from_format('Y-m-d H:i:s', $date);
    $day = $date['day'];
    $month = $date['month'] - 1;
    $year = $date['year'];
    return $day . ' ' . $months[$month] . ' ' . $year;
}

function makeShortText(string $content, int $length = 50) : string
{
    if (mb_strlen($content) > $length) {
        return mb_substr($content, 0, $length) . '...';
    }

    return $content;
}

function clearData($data) : string
{
    $hackBlackList = ['--', 'drop', ';', '#', '/*', '*/', 'version()', 'concat', 'extract'];

    foreach ($hackBlackList as $term) {
        if (strstr($data, $term)) {
            return '';
        }
    }

    return addslashes(stripslashes(htmlspecialchars(strip_tags($data))));
}

function getCurrentUrl() : string
{
    if (getEnvValue('APP_ENV') == 'local') {
        return 'http://localhost:' . $_SERVER['SERVER_PORT'] . $_SERVER['REQUEST_URI'];
    }

    return getEnvValue('DOMAIN_NAME')  . $_SERVER['REQUEST_URI'];
}


function abort(int $code) : void
{
    http_response_code($code);

    if ($code === 410) {
        echo  renderView('v3/templates/errors/410.php');
        exit();
    }

    echo  renderView('v3/templates/errors/404.php');
    exit();
}

// Функция для получения локализованных строк
// Функция для получения локализованных строк
function lang($key, $locale = null) : string
{
    if (!$locale) {
        $locale = getLocale(); // Получаем локаль из URL
    }

    // Путь к папке с языковыми файлами
    $langDir = DOCUMENT_ROOT . '/resources/lang/' . $locale;

    // Разбиваем ключ на части для поддержки вложенности
    $keys = explode('.', $key);
    if (count($keys) == 0) {
        return $key;
    }
    $pos = 0;
    $localPathToFind = '';

    foreach ($keys as $i => $_key) {
        $localPathToFind .= '/' . $_key;
        $pathToFind = $langDir . $localPathToFind . '.php';
        if (file_exists($pathToFind)) {
            $pos = $i;
            $data = include($pathToFind);
            for ($i = $pos + 1; $i < count($keys); $i++) {
                if (isset($data[$keys[$i]])) {
                    $data = $data[$keys[$i]];
                }
            }
            if (!is_array($data)) {
                return $data;
            }
        }
    }

    return $key;
}


function getPostDescription($post) : string
{
    return $post->text_on_blog_page ?? $post->lead_text ?? makeShortText($post->content, 400);
}
