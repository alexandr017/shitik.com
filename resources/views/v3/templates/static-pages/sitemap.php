<?php
includeCSS(['modules/general', 'modules/fonts', 'modules/header', 'modules/breadcrumb', 'modules/content', 'modules/footer']);

$alternates = [
    (object) ['lang' => 'en', 'url' => 'en/sitemap'],
    (object) ['lang' => 'ru', 'url' => 'ru/sitemap'],
    (object) ['lang' => 'es', 'url' => 'es/sitemap'],
    (object) ['lang' => 'pt', 'url' => 'pt/sitemap'],
    (object) ['lang' => 'fr', 'url' => 'fr/sitemap'],
    (object) ['lang' => 'de', 'url' => 'de/sitemap'],
    (object) ['lang' => 'zh', 'url' => 'zh/sitemap'],
    (object) ['lang' => 'hi', 'url' => 'hi/sitemap'],
];

foreach ($alternates as $key => $alternate) {
    if ($alternate->url ==  getLocale() . '/sitemap') {
        unset($alternates[$key]);
    }
}
$title = $page['title'];
$metaDescription = $page['meta_description'];

echo renderView('v3/modules/head.php', compact('title', 'metaDescription', 'alternates'));
?>
<body>
<?php echo renderView('v3/modules/menu.php'); ?>
<main class="container">
    <ul class="breadcrumb">
        <li><a href="/<?php echo getLocale(); ?>"><?php echo lang('breadcrumb.index'); ?></a></li>
        <li class="active"><?php echo $page['h1'] ?></li>
    </ul>
    <h1><?php echo $page['h1'] ?></h1>
    <div class="content">
        <ul>
           <?php foreach ($items as $item) : ?>
                <li><a href="/<?php echo $item->url; ?>"><?php echo $item->h1 ?></a></li>
                <?php if (isset($item->children)) : ?>
                    <ul>
                    <?php foreach ($item->children as $child) : ?>
                        <li><a href="/<?php echo $child->url; ?>"><?php echo $child->h1 ?></a></li>
                    <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </div>
</main>
<?php echo renderView('v3/modules/footer.php'); ?>
<?php echo renderView('v3/modules/js-scripts.php'); ?>
</body>
</html>