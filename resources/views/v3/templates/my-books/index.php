<?php
includeCSS(['modules/general', 'modules/fonts', 'modules/header', 'modules/breadcrumb', 'modules/content', 'modules/sidebar', 'modules/footer',
'modules/my-books/books-list']);

$title = $page['title'];
$metaDescription = $page['meta_description'];

$clearedLink = str_replace('/' . getLocale() . '/', '', $_SERVER['REQUEST_URI']);
$alternates = [
    (object) ['lang' => 'en', 'url' => 'en/' . $clearedLink],
    (object) ['lang' => 'ru', 'url' => 'ru/' . $clearedLink],
    (object) ['lang' => 'es', 'url' => 'es/' . $clearedLink],
    (object) ['lang' => 'pt', 'url' => 'pt/' . $clearedLink],
    (object) ['lang' => 'fr', 'url' => 'fr/' . $clearedLink],
    (object) ['lang' => 'de', 'url' => 'de/' . $clearedLink],
    (object) ['lang' => 'zh', 'url' => 'zh/' . $clearedLink],
    (object) ['lang' => 'hi', 'url' => 'hi/' . $clearedLink],
];

foreach ($alternates as $key => $alternate) {
    if ('/' . $alternate->url ==  $_SERVER['REQUEST_URI']) {
        unset($alternates[$key]);
    }
}

echo renderView('v3/modules/head.php', compact('title', 'metaDescription', 'alternates'));
?>
<body>
<?php echo renderView('v3/modules/menu.php'); ?>
<main class="container">
    <ul class="breadcrumb">
        <li><a href="/<?php echo getLocale(); ?>"><?php echo lang('breadcrumb.index'); ?></a></li>
        <li class="active"><?php echo lang('breadcrumb.my-books'); ?></li>
    </ul>

    <h1><?php echo $page['h1'] ?></h1>

    <div class="content">
        <?php echo $page['lead_text'] ?>
    </div>

    <div class="books-list">
        <a class="book" rel="nofollow noopener" href="https://www.litres.ru/71482147/" target="_blank">
            <img src="/images/my-books/preview/1.jpg" alt="Как гуманитарию подчинить продуктивность и планирование?">
            <div class="info">
                <span class="title">Как гуманитарию подчинить продуктивность и планирование?</span>
                <span class="year-published">2024</span>
            </div>
        </a>

        <a class="book" rel="nofollow noopener" href="https://www.litres.ru/72277357/" target="_blank">
            <img src="/images/my-books/preview/2.jpg" alt="Большие победы маленькими шагами">
            <div class="info">
                <span class="title">Большие победы маленькими шагами</span>
                <span class="year-published">2025</span>
            </div>
        </a>

        <div class="book disable">
            <img src="/images/my-books/preview/no-image.jpg" alt="<?php echo lang('template-my-books.soon'); ?>">
            <div class="info">
                <span class="title"><?php echo lang('template-my-books.soon'); ?></span>
                <span class="year-published">2025</span>
            </div>
        </div>

    </div>

    <div class="content">
        <?php echo $page['content'] ?>
    </div>

</main>
<?php echo renderView('v3/modules/footer.php'); ?>
<?php echo renderView('v3/modules/js-scripts.php'); ?>
</body>
</html>


