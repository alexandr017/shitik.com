<?php
const DOCUMENT_ROOT = __DIR__ . '/../';
$GLOBALS['css_modules'] = [];
$title = '';
$metaDescription = '';
$canonical = '';
$preview = '';

include DOCUMENT_ROOT . '/helpers.php';

if (!isset($_SERVER['PATH_INFO'])) {
    $_SERVER['PATH_INFO'] = '/';
}

if (isset($_SERVER['REQUEST_URI'])) {
    $_SERVER['PATH_INFO'] = $_SERVER['REQUEST_URI'];
}


// Проверяем, заканчивается ли URL на слэш
if (substr($_SERVER['PATH_INFO'], -1) === '/') {
    // Удаляем слэш из конца URL
    $newUrl = rtrim($_SERVER['PATH_INFO'], '/');

    // Устанавливаем заголовок для редиректа с кодом 301
    header("Location: $newUrl", true, 301);
    exit(); // Завершаем выполнение скрипта
}

include DOCUMENT_ROOT . '/routes.php';