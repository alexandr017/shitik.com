<?php

$mainModules = ['modules/general', 'modules/fonts', 'modules/header', 'modules/breadcrumb', 'modules/content', 'modules/sidebar', 'modules/footer', 'modules/movies/movie-card'];
$additionalModules = [];

includeCSS($mainModules);
$title = $movie->title;
$metaDescription = $movie->meta_description;
$preview = getEnvValue('DOMAIN_NAME') . $movie->preview;
echo renderView('v3/modules/head.php', compact('title', 'metaDescription', 'preview', 'alternates'));
?>
<body>
<?php echo renderView('v3/modules/menu.php'); ?>
<main class="container">
    <ul class="breadcrumb">
        <li><a href="/<?php echo getLocale(); ?>"><?php echo lang('breadcrumb.index'); ?></a></li>
        <li><a href="/<?php echo getLocale(); ?>/movies""><?php echo lang('breadcrumb.movies'); ?></a></li>
        <li class="active"><?php echo $movie->h1 ?></li>
    </ul>

    <h1><?php echo $movie->h1 ?></h1>
<!--    <time datetime="--><?php //echo  date('Y-m-d', strtotime($movie->created_at)) ?><!--" class="date-pub">--><?php //echo getDateByLang($movie->created_at, getLocale()) ?><!--</time>-->
    <span class="unique" data-text="<?php echo lang('general.unique'); ?>"></span>
    <div class="content-wrap">
        <div class="content">
            <?php echo renderView('v3/modules/movies/movie-card.php', compact('movie')); ?>
            <?php echo contentRender($movie->review); ?>
        </div>
        <?php echo renderView('v3/modules/sidebar.php'); ?>
    </div>
</main>
<?php echo renderView('v3/modules/footer.php', compact('movie')); ?>
<?php echo renderView('v3/modules/js-scripts.php'); ?>
</body>
</html>

