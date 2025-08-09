<?php

return [
//    '/ru/library?show_type=short-list' => 'view/v3/templates/static_pages/library.php',
//    '/ru/library?show_type=full-list' => 'view/v3/templates/static_pages/library.php',
    'fetch/library/load-book' => [\app\Controllers\Fetch\LibraryController::class, 'loadBook'],
    'fetch/library/display' => [\app\Controllers\Fetch\LibraryController::class, 'display'],
    'fetch/comments/store' => [\app\Controllers\Fetch\CommentsController::class, 'store'],
];