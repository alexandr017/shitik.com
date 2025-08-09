<?php

$mainModules = [
    'modules/general', 'modules/fonts', 'modules/header', 'modules/author',
    'modules/breadcrumb', 'modules/content', 'modules/sidebar', 'modules/footer'];
$additionalModules = [];
if ($post->modules !== null) {
    $additionalModules = explode(PHP_EOL, $post->modules);
}

$modules = array_merge($mainModules, $additionalModules);
includeCSS($modules);
$title = $post->title;
$metaDescription = $post->meta_description;
$preview = getEnvValue('DOMAIN_NAME') . $post->preview;
echo renderView('v3/modules/head.php', compact('title', 'metaDescription', 'preview', 'alternates'));
?>
<body class="post">
<?php echo renderView('v3/modules/menu.php'); ?>
<main class="container">
    <ul class="breadcrumb">
        <li><a href="/<?php echo getLocale(); ?>"><?php echo lang('breadcrumb.index'); ?></a></li>
        <li><a href="/<?php echo getLocale(); ?>/blog"><?php echo lang('breadcrumb.blog'); ?></a></li>
        <li class="active"><?php echo $post->h1 ?></li>
    </ul>
    <h1><?php echo $post->h1 ?></h1>
    <div class="content-wrap">
        <div class="content">
            <?php echo renderView('v3/modules/author.php'); ?>

            <div class="post-info">
                <span class="unique" data-text="<?php echo lang('general.unique'); ?>"></span>
                <time datetime="<?php echo  date('Y-m-d', strtotime($post->created_at)) ?>" class="date-pub"><?php echo getDateByLang($post->created_at, getLocale()) ?></time>
            </div>

            <?php echo contentRender($post->content); ?>
        </div>
        <?php echo renderView('v3/modules/sidebar.php'); ?>
    </div>
</main>
<?php echo renderView('v3/modules/footer.php', compact('post')); ?>
<?php echo renderView('v3/modules/js-scripts.php'); ?>
</body>
</html>

