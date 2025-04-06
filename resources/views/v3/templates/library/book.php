<?php

$mainModules = ['modules/general', 'modules/fonts', 'modules/header', 'modules/breadcrumb', 'modules/content', 'modules/sidebar', 'modules/footer', 'modules/library/library', 'modules/library/library-list', 'modules/library/book-card'];
$additionalModules = [];

includeCSS($mainModules);
$title = $book->title;
$metaDescription = $book->meta_description;
$preview = getEnvValue('DOMAIN_NAME') . $book->cover_big_image;
echo renderView('v3/modules/head.php', compact('title', 'metaDescription', 'preview', 'alternates'));
?>
<body>
<?php echo renderView('v3/modules/menu.php'); ?>
<main class="container">
    <ul class="breadcrumb">
        <li><a href="/<?php echo getLocale(); ?>"><?php echo lang('breadcrumb.index'); ?></a></li>
        <li><a href="/<?php echo getLocale(); ?>/library"><?php echo lang('breadcrumb.library'); ?></a></li>
        <li class="active"><?php echo $book->h1 ?></li>
    </ul>

    <h1><?php echo $book->h1 ?></h1>
<!--    <time datetime="--><?php //echo  date('Y-m-d', strtotime($book->created_at)) ?><!--" class="date-pub">--><?php //echo getDateByLang($book->created_at, getLocale()) ?><!--</time>-->
    <span class="unique" data-text="<?php echo lang('general.unique'); ?>"></span>
    <div class="content-wrap">
        <div class="content">
            <?php echo renderView('v3/modules/library/book-card.php', compact('book', 'books')); ?>
            <?php echo contentRender($book->review); ?>
        </div>
        <?php echo renderView('v3/modules/sidebar.php'); ?>
    </div>
</main>
<?php echo renderView('v3/modules/footer.php', compact('book')); ?>
<?php echo renderView('v3/modules/js-scripts.php'); ?>
</body>
</html>

