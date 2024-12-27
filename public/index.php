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

include DOCUMENT_ROOT . '/routes.php';