<?php
$currentRoute = $_SERVER['REQUEST_URI'];

if (str_contains($currentRoute, "?")) {
    $currentRoute = strstr($currentRoute, "?", true);
}

if ($currentRoute != '/') {
    $currentRoute = htmlspecialchars(preg_replace('/^\//', '', $currentRoute), ENT_QUOTES, 'UTF-8');
}

$routes = [];
// read all files from routes/includes/ and merge them to routes array
foreach (glob(__DIR__ . '/includes/*.php') as $filename) {
    $routes = array_merge($routes, include $filename);
}

// check if route in 410 pages
$pagesWith410Status = deletedPages();
if (in_array($currentRoute, $pagesWith410Status)) {
    abort(410);
}
// Проверяем существование таблицы
$tableCheckQuery = $PDO->query("SELECT COUNT(*) FROM information_schema.tables WHERE table_schema = DATABASE() AND table_name = 'urls'");
$tableExists = $tableCheckQuery->fetchColumn();

if ($tableExists) {
    $query = $PDO->prepare("SELECT section_type, section_id FROM urls WHERE url = :url LIMIT 1");

    $query->execute(['url' => $currentRoute]);
    $result = $query->fetch(PDO::FETCH_ASSOC);

    if ($result) {

         $pagesTypes = include __DIR__ . '/../config/page-types.php';
         match ($result['section_type']) {
             $pagesTypes['PAGE'] => $controller = new \App\Controllers\Dynamics\StaticPagesController(),
             $pagesTypes['POST'] => $controller = new \App\Controllers\Dynamics\BlogPostController(),
             $pagesTypes['BOOK'] => $controller = new \App\Controllers\Dynamics\BookReviewsController(),
             $pagesTypes['MOVIE'] => $controller = new \App\Controllers\Dynamics\MoviesReviewsController(),
            default => $controller = null,
        };
        return $controller?->render($result['section_id']);
    }
}



if (isset($routes[$currentRoute])) {
    if (is_array($routes[$currentRoute])) {
        $className = $routes[$currentRoute][0];
        $methodName = $routes[$currentRoute][1];
        $controller = new $className();
        $controller->$methodName();
        exit();
    } else {
        $file = DOCUMENT_ROOT . '/' . $routes[$currentRoute];
        if (file_exists($file)) {
            include $file;
            exit();
        }
    }

}
abort(404);