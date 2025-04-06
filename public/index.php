<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 0); // По умолчанию не показываем ошибки

const DOCUMENT_ROOT = __DIR__ . '/../';

// Подключаем обработчик ошибок
require_once DOCUMENT_ROOT . '/app/helpers.php';
require_once DOCUMENT_ROOT . '/app/Errors/ErrorHandler.php';
\App\Errors\ErrorHandler::register();

// Определяем окружение
$appEnv = getEnvValue('APP_ENV', 'production');
$debugMode = $appEnv === 'local';

if ($debugMode) {
    ini_set('display_errors', 1);
}

// Запуск буферизации вывода
ob_start();

// Автозагрузка классов
spl_autoload_register(function ($class) {
    $class = str_replace('App/', 'app/', $class);
    $path = DOCUMENT_ROOT . str_replace('\\', '/', $class) . '.php';
    if (file_exists($path)) {
        require_once $path;
    }
});

$GLOBALS['css_modules'] = [];



// Подключение к БД с обработкой ошибок
try {
    $host = getEnvValue('DB_HOST', 'your_database');
    $dbname = getEnvValue('DB_NAME', 'your_database');
    $username = getEnvValue('DB_USER_NAME', 'your_user');
    $password = getEnvValue('DB_USER_PASS', 'your_password');

    $PDO = new PDO("mysql:host=$host;dbname=$dbname", $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    \App\Core\ErrorHandler::handleException($e);
}

// Определение маршрута
if (!isset($_SERVER['PATH_INFO'])) {
    $_SERVER['PATH_INFO'] = '/';
}

if (isset($_SERVER['REQUEST_URI'])) {
    $_SERVER['PATH_INFO'] = $_SERVER['REQUEST_URI'];
}

// Редирект на корректные URL без слэша в конце
if (substr($_SERVER['PATH_INFO'], -1) === '/' && $_SERVER['PATH_INFO'] !== '/') {
    $newUrl = rtrim($_SERVER['PATH_INFO'], '/');
    header("Location: $newUrl", true, 301);
    exit();
}

// Подключаем маршруты
echo include DOCUMENT_ROOT . '/routes/routes.php';

$pdo = null;
ob_end_flush();
