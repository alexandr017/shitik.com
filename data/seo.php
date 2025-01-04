<?php

$pages = [
    '/' => [
        'title' => 'Personal website of web developer Alexander Andreevich Shitik',
        'metaDescription' => 'Welcome to my personal website. Here you can find information about me, check out my work, or visit my blog.',
        'h1' => 'Shitik Alexander Andreevich',
        'url' => 'https://shitik.com',
        'preview' => 'https://shitik.com/themes/v3/images/about/photo.jpg'
    ],
    'ru' => [
        'title' => 'Персональный сайт веб-разработчика Александра Андреевича Шитика',
        'metaDescription' => 'Добро пожаловать на мой персональный сайт посвященный разработке сайтов и веб-приложений. Здесь вы можете узнать информацию обо мне, ознакомится с моими работами или посетить мой блог о программировании.',
        'h1' => 'Шитик Александр Андреевич',
        'url' => 'https://shitik.com/ru',
        'preview' => 'https://shitik.com/themes/v3/images/about/photo.jpg'
    ],
    'ru/alexandr-andreevich' => [
        'title' => 'Шитик Александр Андреевич',
        'metaDescription' => 'На данной странице представлена основная информация обо мне, где учился, какие языки и технологии программирования знаю и использую в работе.',
        'h1' => 'Шитик Александр Андреевич',
        'url' => 'https://shitik.com/ru/alexandr-andreevich',
        'preview' => 'https://shitik.com/themes/v3/images/about/photo.jpg'
    ],
    'ru/blog' => [
        'title' => 'Блог с записями',
        'metaDescription' => 'Мысли в слух о программировании и не только',
        'h1' => 'Список постов',
        'url' => 'https://shitik.com/ru/blog',
        'preview' => 'https://shitik.com/images/preview/blog.jpeg'
    ],
    'ru/portfolio' => [
        'title' => 'Шитик Александр Андреевич - Портфолио',
        'metaDescription' => 'Список выполненных мною работ по разработке сайтов, веб приложений, десктопных приложений и сервисов для android-приложений.',
        'h1' => 'Портфолио',
        'url' => 'https://shitik.com/ru/portfolio',
        'preview' => 'https://shitik.com/images/preview/portfolio.webp'
    ],
    'ru/travels' => [
        'title' => 'Список стран в которых я побывал',
        'metaDescription' => 'Страница, на которой я планирую публиковать посещенные страны, а также в будущем возможно публиковать фотографии из поездок.',
        'h1' => '',
        'url' => 'https://shitik.com/ru/travels',
        'preview' => 'https://shitik.com/images/preview/travels.jpeg'
    ],
    'ru/projects' => [
        'title' => 'Мои хобби проекты и идеи',
        'metaDescription' => 'Список некоторых реализованных моих идей. От CMS движка и фреймворка до странных сайтов. ',
        'h1' => '',
        'url' => 'https://shitik.com/ru/projects',
        'preview' => 'https://shitik.com/images/preview/projects.jpeg'
    ],
    'ru/library' => [
        'title' => 'Перечень книг, которые я успел прочитать начиная с 2020 года',
        'metaDescription' => 'Моя виртуальная библиотека. Полный список книг с оценками и рекомендациями, которые я почитал за последнее время.',
        'h1' => '',
        'url' => 'https://shitik.com/ru/library',
        'preview' => 'https://shitik.com/images/preview/library.jpeg'
    ],
    'ru/stats' => [
        'title' => 'Статистика по некоторым метрикам и показателям',
        'metaDescription' => 'Перечень некоторых показателей, которые я решил залить в публичный доступ.',
        'h1' => '',
        'url' => 'https://shitik.com/ru/stats',
        'preview' => 'https://shitik.com/images/preview/stats.jpeg'
    ],
    'ru/site' => [
        'title' => 'Страницы сайта в различных валидаторах',
        'metaDescription' => 'Список всех страниц в распространенных валидаторах таких как: html w3c, google speed insight и другие.',
        'h1' => '',
        'url' => 'https://shitik.com/ru/site',
        'preview' => 'https://shitik.com/images/preview/site.webp'
    ],
    'ru/sitemap' => [
        'title' => 'Список всех страниц сайта',
        'metaDescription' => 'Полный перечень всех страниц сайта shitik.by',
        'h1' => '',
        'url' => 'https://shitik.com/ru/sitemap',
        'preview' => 'https://shitik.com/images/preview/sitemap.jpeg'
    ],


    // blog posts
];

$posts_2019 = include DOCUMENT_ROOT . '/data/ru/2019.php';
$posts_2020 = include DOCUMENT_ROOT . '/data/ru/2020.php';
$posts_2021 = include DOCUMENT_ROOT . '/data/ru/2021.php';
$posts_2022 = include DOCUMENT_ROOT . '/data/ru/2022.php';
$posts_2023 = include DOCUMENT_ROOT . '/data/ru/2023.php';
$posts_2024 = include DOCUMENT_ROOT . '/data/ru/2024.php';
$posts_2025 = include DOCUMENT_ROOT . '/data/ru/2025.php';
$posts = array_merge($posts_2025, $posts_2024, $posts_2023, $posts_2022, $posts_2021, $posts_2020, $posts_2019);
foreach ($posts as $key => $page) {
    $pages[$key] = $page;
}

return $pages;
