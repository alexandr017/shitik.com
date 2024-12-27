<?php

function renderPage(string $page) : void
{
    $file = DOCUMENT_ROOT . '/' . $page;
    if (file_exists($file)) {
        include $file;
    }
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

function getSeoField(string $fieldName) : string
{
    $currentPage = trim($_SERVER['REQUEST_URI'],'/');
    if ($currentPage == '') {
        $currentPage = '/';
    }

    $seoArray = include DOCUMENT_ROOT . '/data/seo.php';
    if (isset($seoArray[$currentPage])) {
        if (isset($seoArray[$currentPage][$fieldName])) {
            return $seoArray[$currentPage][$fieldName];
        }
    }

    if (str_contains($fieldName, '.')) {
        $result = $seoArray[$currentPage];
        foreach (explode('.', $fieldName) as $segment) {
            if (isset($result[$segment])) {
                $result = $result[$segment];
            } else {
                return '';
            }

        }
        return $result;
    }

    return '';
}


function getPosts() : array
{
    $postsRow = include DOCUMENT_ROOT . '/data/seo.php';
    return array_filter($postsRow, function($v, $k){
        return str_contains($k, 'blog/');
    }, ARRAY_FILTER_USE_BOTH);
}

function getCurrentPost() : object
{
    $currentPage = trim($_SERVER['REQUEST_URI'],'/');
    if ($currentPage == '') {
        $currentPage = '/';
    }

    $postsRow = include DOCUMENT_ROOT . '/data/seo.php';
    if (isset($postsRow[$currentPage])) {
        return (object) $postsRow[$currentPage];
    }

    return (object) [];
}