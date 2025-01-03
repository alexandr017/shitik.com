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


if (substr($_SERVER['PATH_INFO'], -1) === '/' && $_SERVER['PATH_INFO'] !== '/') {
    $newUrl = rtrim($_SERVER['PATH_INFO'], '/');

    header("Location: $newUrl", true, 301);
    exit();
}

include DOCUMENT_ROOT . '/routes.php';