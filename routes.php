<?php

$currentRoute = $_SERVER['REQUEST_URI'];

if (! in_array($currentRoute, ['/ru/library?show_type=short-list', '/ru/library?show_type=full-list'])) {
    if (str_contains($currentRoute, "?")) {
        $currentRoute = strstr($currentRoute, "?", true);
    }

}

$baseRoutes = [
    '/' => 'pages/select-lang.php',
];
$routesRuBlog = include DOCUMENT_ROOT . '/routes/ru/blog.php';
$routesRuOther = include DOCUMENT_ROOT . '/routes/ru/other.php';

$routes = array_merge($baseRoutes, $routesRuBlog, $routesRuOther);

$template = 'errors/404.php';
if (isset($routes[$currentRoute])) {
    $template = $routes[$currentRoute];
}

echo renderPage($template);