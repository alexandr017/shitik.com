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

        <p>Текущий год не обошелся без массового чтения книг. К сожалению по ряду причин количество прочитанных книг в этом году по сравнению с <a href="/ru/blog/books-2021">прошлым годом</a> продолжает падать. Виной этому долгий квартирный ремонт, смещение приоритетов на другие сферы и конечно постоянное чувство тревоги, которое весь год проследовало и преследует меня. Тем не менее читать по 20-25 книг собираюсь и далее каждый год. Что касается этого года я сумел осилить лишь 22 при том, что планировал 27.</p>
        <p>Среди 22 прочитанных книг в этом году попалось несколько художественных. Основной причиной по которой я читал художественные книги была организация на работе книжного клуба в которым мы переодически читаем и обсуждаем разные книги. И если художественная литература мне не очень зашла, то благодаря этому клубу я познакомился с некоторыми неплохими книгами.</p>
        <p>В целом если выделять книги, которые в этом году мне понравились и я бы советовал прочитать (которые не относятся к книгам по программированию), то можно выделить следующие:</p>

        <ul>
            <li>Роберт Кийосаки - "Богатый папа, бедный папа"</li>
            <li>Маршалл Розенберг - "Насильственное общение язык жизни"</li>
            <li>Кэрол Дуэк - "Гибкое сознание. Новый взгляд на психологию развития взрослых и детей"</li>
            <li>Роберт Сапольски - "Почему у зебр не бывает инфаркта"</li>
            <li>Мария Гаранина - "Трудно быть папой, или Веселые будни семьи Борджиа”</li>
        </ul>

        <p>Еще одной отличительной особенностью этого года с прошлыми является то, что конспекты я перечитывал параллельно с чтением новых книг в первой половине года. Так что тенденция чтения конспектов в декабре вытеснилась чтением конспектов на протяжении года.</p>
        <p>Что касается технологий, то в этом году помимо классических и хорошо известных мне тем начал открывать для себя квантовые компьютеры, нейронные сети, блокчейн.</p>

        <p>Вот полный перечень книг, который я прочитал в этом году вместе с обложками к ним.</p>

        <img src="/images/blog/2022/books-2022/list.jpeg" alt="Список книг 2022" loading="lazy">
        <br>
        <img src="/images/blog/2022/books-2022/preview2.jpeg" alt="Список книг 2022" loading="lazy">
        <p>Более подробный список прочитанных книг можно посмотреть в моей <a href="/ru/library">виртуальной библиотеке</a> 📚.</p>


    </article>

</main>
<?php include DOCUMENT_ROOT . '/view/v3/footer.php'; ?>
<?php include DOCUMENT_ROOT . '/view/v3/js-scripts.php'; ?>
</body>
</html>
