<?php
$title = $page['title'];
$metaDescription = $page['meta_description'];

includeCSS(['modules/general', 'modules/fonts', 'modules/header', 'modules/breadcrumb', 'modules/content', 'modules/sidebar', 'about', 'modules/footer']);
echo renderView('v3/modules/head.php', compact('title', 'metaDescription'));
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