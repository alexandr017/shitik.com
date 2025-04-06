<?php
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

includeCSS(['modules/general', 'modules/fonts', 'modules/header', 'modules/breadcrumb', 'modules/content', 'modules/sidebar', 'about', 'modules/footer']);
echo renderView('v3/modules/head.php', compact('title', 'metaDescription', 'alternates'));
?>
<body>
<?php echo renderView('v3/modules/menu.php') ?>
<main class="container">
    <ul class="breadcrumb">
        <li><a href="/<?php echo getLocale(); ?>"><?php echo lang('breadcrumb.index'); ?></a></li>
        <li class="active"><?php echo $page['h1'] ?></li>
    </ul>
    <h1><?php echo $page['h1'] ?></h1>
    <div class="content-wrap">
        <div class="content">
            <?php echo $page['content'] ?>
        </div>
        <?php echo renderView('v3/modules/sidebar.php'); ?>
    </div>
</main>
<?php echo renderView('v3/modules/footer.php'); ?>
<?php echo renderView('v3/modules/js-scripts.php'); ?>
</body>
</html>