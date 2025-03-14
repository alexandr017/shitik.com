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


        <p>В моем детстве и подростковом возрасте были очень популярны лотереи ваше лото и супер лото. Не знаю судьбы этих лотереей сейчас, возможно какая-то из них существует и сейчас. Но в детстве мои родители периодически покупали и играли в них. Чаще всего их раздражало то, что победы в основном были в Минске или Минской области. В связи с этим, когда я был в Минске, мне поступало задание купить лотерейку или даже сразу несколько. В возрасте подростка я не придал значения насколько абсурдной была эта просьба. Недавно я узнал, что я не единственный, кто покупал в Минске лотерею и привозил домой. Возможно таких людей сильно больше. Но теперь, пройдя более десятка лет, попробуем разобрать ситуации.</p>

        <p>На самом деле все предельно просто. Не существует никаких выигрышных лотерей, специализированных на выигрыш под определенный регион. И хоть я понял это еще очень давно, наверняка еще остались те, кто до сих пор верит в подобные теории заговора и конспирологию, что лотереи Минска и области более везучие. Минские лотереи действительно выигрывали большее число раз, но это связано исключительно с теорией вероятности, а не с конспирологией. В Беларуси насчитывается около 9.5 миллионов человек. Лет 10 назад население было чуть больше поэтому для ревности счета я буду округлять до 10 миллионов. Далее возьмем информацию по распределению населения между областями нашей страны. К сожалению я не нашел (и не особо искал) на скажем год 2010 или 2015. Но быстро нашел на сайте майфин статью о населении на 1 января 2023 года. Нам не важны конкретные цифры, ведь там проценты строятся на основе не 10 миллионов, а 9.2, но за последние десятилетие каких-либо сильных изменений этих процентов не было. И так, вот что говорит нам статистика по распределению населения внутри страны.</p>

        <p>
            <img src="/images/blog/2023/winning-lotteries/image1.jpg" alt="Распределению населения между областями Беларуси" loading="lazy"><br>
            <noindex><span style="font-size: 0.8rem; font-style: italic;">Изображение взято с сайта с сайта https://myfin.by</span></noindex>
        </p>

        <p>Если мы сложим Минск и Минскую область (в источниках выигрыша лотерей Минск и область шли всегда единым регионом, но для более детальной статистики майфин их разделил), получим следующее:<br>
        Минская область: 37.6%<br>
        Гомельская область 14.6%<br>
        Брестская область 14.3%<br>
        Витебская область 11.9%<br>
        Гродненская область 10.8%<br>
        Могилевская область 10.8%<br>


        <p>Давайте посмотрим диаграмму на основании данных выше.</p>

        <img src="/images/blog/2023/winning-lotteries/image2.jpg" alt="Распределению населения между областями Беларуси" loading="lazy" style="max-width: 500px; margin: auto; display: inherit;">

        <p>Как видно, Минская область вместе с Минском занимают огромную часть. Это и не удивительно, ведь суммарно они дают чуть больше одной трети.</p>

        <p>Идем дальше. Исходя из этого и предположив, что люди у нас плюс-минус одинаково азартные по всей стране, можно сделать выводит, что в Минске и области закупается сильно больше лотереек, ведь там живет сильно больше людей, чем в любой другой области. То есть в среднем в 3 раза больше людей проживает в Минске и области, а значит примерно и в 3 раза лотерейки филиалов Минска и области покупаются больше. А если они покупаются больше, то значит среди прочих равных и выигрывать они будут сильно чаще. Вот и все. Никакой конспирологии, сугубо математика и теория вероятностей.</p>

        <p>На случай, если кто-то все равно не очень понял, можете провести опыт. Взять 100 бумажек (ведь у нас именно 100 процентов общее число лотерей). На 38 из них написать Минск, на 15 Гомель, на 13 Брест, на 12 Витебск, на 11 Гомель и еще раз на 11 Могилев. Тщательно перемешайте и достаньте из кучи случайных штук 10-15. Подавляющим большинством там будут бумажки с подписью Минск, потому что изначально их было больше.  Теории вероятность будет работать как на малых размерах, то есть 100 бумажках. Так и на больших, 100 тысячах лотерей, большая из которых была куплена в Минске и области, потому что именно на территории этой области и города сконцентрировано больше всего нашего населения.</p>

    </article>

</main>
<?php include DOCUMENT_ROOT . '/view/v3/footer.php'; ?>
<?php include DOCUMENT_ROOT . '/view/v3/js-scripts.php'; ?>
</body>
</html>
