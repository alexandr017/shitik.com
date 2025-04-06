<?php
includeCSS(['modules/general', 'modules/fonts', 'modules/header', 'modules/breadcrumb', 'modules/blog-index', 'modules/sidebar', 'modules/footer']);

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
        <li class="active"><?php echo $page['h1'] ?></li>
    </ul>

    <h1><?php echo $page['h1'] ?></h1>
    <p style="margin-bottom: 3rem"><?php echo $page['lead_text'] ?></p>
    <div class="content-wrap">
        <div class="posts">
            <?php foreach ($posts as $_post) : ?>
                <?php $post = (object) $_post; ?>
                <div class="post-item">
                    <a href="/<?php echo $post->url; ?>"><img class="post-item-img" src="<?php echo $post->preview; ?>" alt="<?php echo $post->h1_on_blog_page ?? $post->h1; ?>" loading="lazy"></a>
                    <div class="post-text-wrap">
                        <h2 class="post-item-title"><a href="/<?php echo $post->url; ?>"><?php echo $post->h1_on_blog_page ?? $post->h1 ?></a></h2>
                        <time datetime="<?php echo  date('Y-m-d', strtotime($post->created_at)) ?>" class="date-pub"><?php echo getDateByLang($post->created_at, getLocale()) ?></time>
                        <p class="post-item-desc"><?php echo getPostDescription($post) ?></p>
                        <a href="/<?php echo $post->url; ?>" class="post-item-btn"><?php lang('template-blog-index.read_more'); ?></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?php echo renderView('v3/modules/sidebar.php'); ?>
    </div>

</main>
<?php echo renderView('v3/modules/footer.php', compact('posts', 'page')); ?>
<?php echo renderView('v3/modules/js-scripts.php'); ?>
</body>
</html>