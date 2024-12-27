<?php
includeCSS(['modules/general', 'modules/fonts', 'modules/header', 'modules/breadcrumb', 'modules/blog-index']);
include DOCUMENT_ROOT . '/view/v3/head.php';
$posts = getPosts();
?>
<body>
<?php include DOCUMENT_ROOT . '/view/v3/menu.php'; ?>
<main class="container">
    <ul class="breadcrumb">
        <li><a href="/">Главная</a></li>
        <li class="active">Блог</li>
    </ul>
    <div class="post-wrap">
        <h1>Список постов</h1>
        <p style="margin-bottom: 3rem">Когда я только оканчивал колледж, поступил в универ и шел на первую работу я создал блог, в котором публиковал личные заметки, часто используемые куски кода, ссылки и др. материалы.
            С тех пор я сильно прибавил в своих хард-скилах и решил прикрыть тот проект, который у меня нет времени и желания сопровождать. В замен старому я решил писать статьи общего характера, в которых не будет ни строчки кода. </p>

        <div class="posts">
            <?php foreach ($posts as $post) : ?>
                <div class="post-item">
                    <a href="<?php echo $post['url']; ?>"><img class="post-item-img" src="<?php echo $post['preview']; ?>" alt="<?php echo $post['titleForIndexBlog']; ?>" loading="lazy"></a>
                    <div class="post-text-wrap">
                        <h2 class="post-item-title"><a href="<?php echo $post['url']; ?>"><?php echo $post['titleForIndexBlog']; ?></a></h2>
                        <time datetime="<?php echo $post['date']['htmlFormat']; ?>" class="date-on-index"><?php echo $post['date']['viewFormat']; ?></time>
                        <p class="post-item-desc"><?php echo $post['descriptionForIndexBlog']; ?></p>
                        <a href="<?php echo $post['url']; ?>" class="post-item-btn">Читать далее</a>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</main>
<?php include DOCUMENT_ROOT . '/view/v3/footer.php'; ?>
<?php include DOCUMENT_ROOT . '/view/v3/js-scripts.php'; ?>
</body>
</html>