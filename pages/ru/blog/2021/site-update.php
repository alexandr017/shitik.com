<?php
includeCSS(['modules/general', 'modules/fonts', 'modules/header', 'modules/breadcrumb', 'modules/content']);
include DOCUMENT_ROOT . '/view/v3/head.php';
$posts = getPosts();
?>
<body>
<?php include DOCUMENT_ROOT . '/view/v3/menu.php'; ?>
<main class="container">
    <ul class="breadcrumb">
        <li><a href="/ru">Главная</a></li>
        <li><a href="/ru/blog">Блог</a></li>
        <li class="active"><?php echo getSeoField('h1') ?></li>
    </ul>
    <div class="content">
        <h1><?php echo getSeoField('h1') ?></h1>
        <time datetime="<?php echo getSeoField('date.htmlFormat') ?>" class="date-pub"><?php echo getSeoField('date.viewFormat') ?></time>

        <p>Не так давно я обновил свой сайт. Теперь все его разделы снова в одном месте, однако это технические детали, которые вряд ли кому-то интересны. Так же среди основных изменяй можно выделить слегка измененный дизайн (особенно это заметно на главной странице), расширения сайта и внедрением новых разделов, дополнение существующих страниц новой информацией. Бегло рассмотрим новые разделы и что там будет:</p>
        <ul>
            <li>Путешествия (постараюсь доработать раздел и размещаться ссылки на фото своих путешествий)</li>
            <li>Свои проекты (собственные проекты, которые изредка пишу в свободное от работы время)</li>
            <li>Библиотека (список книг, которые я прочитал)</li>
            <li>Статистика (различная занимательная фигня обо мне)</li>
            <li>О сайте (небольшая страница с общей информацией о сайте и показателях загрузки сайта)</li>
            <li>Карта сайта (для более удобной навигации человеку и поисковому боту)</li>
        </ul>
        <p>Также в скором времени надеюсь достать из черновиков несколько заметок и доработать до полноценных статей.</p>
        <img class="post-img" src="/images/blog/2021/site-update/site-screen.png" alt="site screenshot">
    </div>
</main>
<?php include DOCUMENT_ROOT . '/view/v3/footer.php'; ?>
<?php include DOCUMENT_ROOT . '/view/v3/js-scripts.php'; ?>
</body>
</html>
