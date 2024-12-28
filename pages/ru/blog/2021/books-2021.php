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
    <article class="content">
        <h1><?php echo getSeoField('h1') ?></h1>
        <time datetime="<?php echo getSeoField('date.htmlFormat') ?>" class="date-pub"><?php echo getSeoField('date.viewFormat') ?></time>

        <p>В текущем году я прочитал 30 книг 📘, что на 2 меньше чем в прошлом году. Думаю это было связано с путешествием ✈️ в Новосибирск и Алтай, плюс сказалась <a href="/ru/blog/home-bay">покупка квартиры</a> 🏠 и последующий ремонт 🔨 в ней.</p>
        <p>Моя <a href="/ru/blog/books-2020">прошлая статья</a> про то, как я в первые в жизни осознанно подошел к чтению книг, полюбил и подсел на это дело и в этом году была очень актуальна. У меня нет новых советов 🤔, которые бы изменили мои подходы и предпочтения. Всё примерно так же и осталось:</p>
        <ul>
            <li>Читать только электронные книги</li>
            <li>Не читать художественные или любые другие книги кроме IT-шных и книг менеджмента и саморазвития.</li>
            <li>Распределять книги примерно следующим образом 70 процентов IT-шные, 30 управление, менеджмент и саморазвитие.</li>
            <li>Читать почти каждый день. Страниц по 20-25 минимум.</li>
            <li>Конечно же писать конспекты и перечитывать их выделив для этого декабрь.</li>
        </ul>
        <p>Не буду больше долго рассусоливать и сразу перейду с списку того, что я прочитал в прошлом году.</p>
        <img src="/images/blog/2021/books-2021/list.jpg" alt="Список книг 2021" loading="lazy">
        <br>
        <img src="/images/blog/2021/books-2021/list2.jpg" alt="Список книг 2021" loading="lazy">
        <p>Более подробный список по прочтенным книгам можно посмотреть в моей <a href="/ru/library">виртуальной библиотеке</a> 📚.</p>
        <p>Будут ли я в 2022 читать книги? Однозначно да! Сколько я почитаю? Пока не скажу, однако я точно знаю минимальное число которое должен осилить и ровно через год наверняка выйдет такая же статья с подробным списком.</p>
    </article>

</main>
<?php include DOCUMENT_ROOT . '/view/v3/footer.php'; ?>
<?php include DOCUMENT_ROOT . '/view/v3/js-scripts.php'; ?>
</body>
</html>
