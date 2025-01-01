<?php
includeCSS(['modules/general', 'modules/fonts', 'modules/header', 'modules/breadcrumb', 'modules/content', 'modules/blog/podcasts']);
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
        <h1>Обучение через подкасты</h1>
        <time datetime="<?php echo getSeoField('date.htmlFormat') ?>" class="date-pub"><?php echo getSeoField('date.viewFormat') ?></time>

        <span class="h2">Содержание</span>
        <ul class="post-nav">
            <li><a rel="nofollow noopener" target="_blank" href="#a-1">Введение</a></li>
            <li><a rel="nofollow noopener" target="_blank" href="#a-2">Зачем это все мне надо было</a></li>
            <li><a rel="nofollow noopener" target="_blank" href="#a-3">Как я подкасты собирал</a></li>
            <li><a rel="nofollow noopener" target="_blank" href="#a-4">Трудности с систематизацией</a></li>
            <li><a rel="nofollow noopener" target="_blank" href="#a-5">Выводы</a></li>
        </ul>

        <h2 id="a-1">Введение</h2>
        <p>В своих предыдущих статьях я не раз ссылался при самообучении на такие способы как: чтение книг, просмотр Ютуба, разбор ссылок, подкасты. В этой статье речь пойдет как раз о подкастах.</p>
        <p>Существую десятки как русскоязычных так и иностранных подкастов об IT. В каждом из них за все время прослушивания у ведущих есть как любимые языки и технологии , так и не любимые. Даже если подкаст ведут 50-60 летние гуру, их мнение не может претендовать на единственное истинное. Это, к сожалению, часто вводит в заблуждение молодых слушателей (когда на протяжении 50 выпусков ведущие явно превозносят одни технологии и унижают другие) может сложится впечатление, что оно так и есть. Послушай подкаст, но не прислушайся ко всему там сказанному буквально. Сделай некий свой вывод. Тем не менее лично для меня подкасты являются мощный инструментов для изучения чего-то нового в языках и технологиях, а так же благодаря подкастам можно всегда оставаться в куре последних новостей таких мировых IT гигантов как Amazon, Google, Apple, Microsoft, Facebook, Oracle и другие.</p>

        <h2 id="a-2">Зачем это все мне надо было</h2>

        <p>Уже года 2 я активно слушаю различные подкасты в небольшом количестве. Среди моих любимых можно выделить “Цинковый прод”, “5тиминутка PHP”, “Радио-Т” и “DevZen”. Не так давно я поставил перед самой цель увеличить объем прослушивания подкастов и добавить в плейлист постоянно прослушиваемых еще 2-3 подкаста, но допускал что их может быть больше и я буду просто фоново следить за некоторыми и в случае понравившихся тем прослушаю тот или иной выпуск. Помимо этого я хотел немного изменить организационный процесс прослушивания подкастов. Ранее я слушал их через приложение подкасты на айфоне, однако для человека который всегда работает удаленно прослушивание подкастов на ПК / макбуке более удобный вариант. Особенно если у подкаста есть видео сопровождение. В связи с этим я выдвинул некоторые требования, которые я бы хотел видеть в новом организационном процессе:
        </p>
        <ul>
            <li>Единый источник всех подкастов</li>
            <li>Поддрежка видео формата</li>
            <li>Прослушивание в ускоренном режиме</li>
            <li>Хороший и удобный интерфейс</li>
            <li>Налаженная система оповещения новых выпусков</li>
        </ul>




        <h2 id="a-3">Как я подкасты собирал</h2>

        <p>Выбор подкастов как оказалось не самое быстрое и простое занятие.  У меня уже заранее был примерный список из штук 20 подкастов. Начав анализировать несколько подкастов из списка я понял, что подавляющая проблема всех подкастов - разные площадки для прослушивания. Я вернулся к началу списка и стал вести более детальной список тех площадок, которые поддерживают все подкасты. Во время изучения наткнулся еще на несколько подкастов и в итоге получилось 3 десятка подкастов. Полный список и анализ площадок приведен в таблице ниже (слева на право: сайт, ютуб, Soundcloud, Apple Podcasts, Castbox, RSS, Google Podcasts).</p>
        <table class="podcasts-table">
            <thead>
                <tr class="row0">
                    <th class="column0">Название</th>
                    <th class="column1">Сайт<br><br><img loading="lazy" class="source-icon" src="/images/blog/2021/podcasts/site.png" alt="Сайт"></th>
                    <th class="column2">Youtube<br><br><img loading="lazy" class="source-icon" src="/images/blog/2021/podcasts/yo.jpg" alt="Youtube"></th>
                    <th class="column3">Soundcloud<br><br><img loading="lazy" class="source-icon" src="/images/blog/2021/podcasts/soundcloud.png" alt="Soundcloud"></th>
                    <th class="column4">Apple Podcasts<br><br><img loading="lazy" class="source-icon" src="/images/blog/2021/podcasts/apple.png" alt="Apple Podcasts"></th>
                    <th class="column5">Castbox<br><br><img loading="lazy" class="source-icon" src="/images/blog/2021/podcasts/castbox.png" alt="Castbox"></th>
                    <th class="column6">RSS<br><br><img loading="lazy" class="source-icon" src="/images/blog/2021/podcasts/rss.png" alt="RSS"></th>
                    <th class="column7">Google Podcasts<br><br><img loading="lazy" class="source-icon" src="/images/blog/2021/podcasts/google.png" alt="Google Podcasts"></th>
                </tr>
            </thead>
            <tbody>
            <tr class="row1">
                <td class="column0">Цинковый прод</td>
                <td class="column1"><a rel="nofollow noopener" target="_blank" href="//znprod.io"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column2"><a rel="nofollow noopener" target="_blank" href="//www.youtube.com/channel/UC6cTShKx3lJWw-EzSr_ZAfw"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column3"><a rel="nofollow noopener" target="_blank" href="//soundcloud.com/znprod"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column4"><a rel="nofollow noopener" target="_blank" href="//podcasts.apple.com/ru/podcast/цинковый-прод-18/id1458311254?mt=2"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column5"><a rel="nofollow noopener" target="_blank" href="//castbox.fm/channel/Цинковый-прод-(18%2B)-id2063457?country=us"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column6">-</td>
                <td class="column7"><a rel="nofollow noopener" target="_blank" href="//podcasts.google.com/feed/aHR0cDovL2ZlZWRzLnNvdW5kY2xvdWQuY29tL3VzZXJzL3NvdW5kY2xvdWQ6dXNlcnM6NjEwNTgyNTU3L3NvdW5kcy5yc3M"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
            </tr>
            <tr class="row2">
                <td class="column0">Радио-Т</td>
                <td class="column1"><a rel="nofollow noopener" target="_blank" href="//radio-t.com"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column2"><a rel="nofollow noopener" target="_blank" href="//www.youtube.com/channel/UCBl1ML1jnlhRxHlCjSKTyeA"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column3">-</td>
                <td class="column4"><a rel="nofollow noopener" target="_blank" href="//podcasts.apple.com/ru/podcast/радио-т/id256504435"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column5">-</td>
                <td class="column6"><a rel="nofollow noopener" target="_blank" href="//radio-t.com/podcast.rss"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column7"><a rel="nofollow noopener" target="_blank" href="//podcasts.google.com/feed/aHR0cDovL2ZlZWRzLnJ1Y2FzdC5uZXQvcmFkaW8tdA"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
            </tr>
            <tr class="row3">
                <td class="column0">devzen</td>
                <td class="column1"><a rel="nofollow noopener" target="_blank" href="//devzen.ru"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column2">-</td>
                <td class="column3">-</td>
                <td class="column4"><a rel="nofollow noopener" target="_blank" href="//podcasts.apple.com/ru/podcast/devzen-podcast/id903660317"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column5"><a rel="nofollow noopener" target="_blank" href="//castbox.fm/channel/DevZen-Podcast-id1459928?country=us"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column6"><a rel="nofollow noopener" target="_blank" href="//devzen.ru/feed/"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column7"><a rel="nofollow noopener" target="_blank" href="//podcasts.google.com/feed/aHR0cDovL2ZlZWRzLmZlZWRidXJuZXIuY29tL0RldnplblBvZGNhc3Q"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
            </tr>
            <tr class="row4">
                <td class="column0">Фронтенд юность</td>
                <td class="column1"><a rel="nofollow noopener" target="_blank" href="//youknow.st"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column2"><a rel="nofollow noopener" target="_blank" href="//www.youtube.com/channel/UCqq1LRv6KKh0bh4JrG_5vDA"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column3"><a rel="nofollow noopener" target="_blank" href="//soundcloud.com/frontend_u"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column4"><a rel="nofollow noopener" target="_blank" href="//podcasts.apple.com/ru/podcast/фронтенд-юность-18/id1247192730"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column5"><a rel="nofollow noopener" target="_blank" href="//castbox.fm/channel/Фронтенд-Юность-(18%2B)-id735409?country=us"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column6">-</td>
                <td class="column7"><a rel="nofollow noopener" target="_blank" href="//podcasts.google.com/feed/aHR0cHM6Ly9mZWVkcy5zb3VuZGNsb3VkLmNvbS91c2Vycy9zb3VuZGNsb3VkOnVzZXJzOjMwNjYzMTMzMS9zb3VuZHMucnNz"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
            </tr>
            <tr class="row5">
                <td class="column0">Разбор полетов</td>
                <td class="column1"><a rel="nofollow noopener" target="_blank" href="//razborpoletov.com"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column2"><a rel="nofollow noopener" target="_blank" href="//www.youtube.com/channel/UChGKDA0UGmzJRSj3j9QtesQ"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column3">-</td>
                <td class="column4"><a rel="nofollow noopener" target="_blank" href="//podcasts.apple.com/ru/podcast/разбор-полетов/id594292319"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column5"><a rel="nofollow noopener" target="_blank" href="//castbox.fm/channel/Разбор-Полетов-id1515396?country=us"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column6"><a rel="nofollow noopener" target="_blank" href="//feeds.podcastmirror.com/razborpoletov"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column7"><a rel="nofollow noopener" target="_blank" href="//podcasts.google.com/feed/aHR0cHM6Ly9mZWVkcy5wb2RjYXN0bWlycm9yLmNvbS9yYXpib3Jwb2xldG92"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
            </tr>
            <tr class="row6">
                <td class="column0">SDCast</td>
                <td class="column1"><a rel="nofollow noopener" target="_blank" href="//sdcast.ksdaemon.ru"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column2"><a rel="nofollow noopener" target="_blank" href="//www.youtube.com/channel/UCD_TbJZlsEaisAb_Zon0Xyw"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column3">-</td>
                <td class="column4"><a rel="nofollow noopener" target="_blank" href="//podcasts.apple.com/ru/podcast/sdcast/id890468606"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column5"><a rel="nofollow noopener" target="_blank" href="//castbox.fm/channel/SDCast-id373241?country=us"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column6"><a rel="nofollow noopener" target="_blank" href="//sdcast.ksdaemon.ru/feed/podcast/"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column7"><a rel="nofollow noopener" target="_blank" href="//podcasts.google.com/feed/aHR0cHM6Ly9zZGNhc3Qua3NkYWVtb24ucnUvZmVlZC9wb2RjYXN0Lw"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
            </tr>
            <tr class="row7">
                <td class="column0">DevOps дефлопе</td>
                <td class="column1"><a rel="nofollow noopener" target="_blank" href="//devopsdeflope.ru"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column2">-</td>
                <td class="column3">-</td>
                <td class="column4"><a rel="nofollow noopener" target="_blank" href="//podcasts.apple.com/ru/podcast/devops-дефлопе-подкаст/id670175970"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column5"><a rel="nofollow noopener" target="_blank" href="//castbox.fm/channel/DevOps-Дефлопе-подкаст-id25614?country=us"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column6"><a rel="nofollow noopener" target="_blank" href="//feeds.feedburner.com/devopsdeflope"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column7"><a rel="nofollow noopener" target="_blank" href="//podcasts.google.com/feed/aHR0cDovL2ZlZWRzLmZlZWRidXJuZXIuY29tL2Rldm9wc2RlZmxvcGU"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
            </tr>
            <tr class="row8">
                <td class="column0">libolibo</td>
                <td class="column1"><a rel="nofollow noopener" target="_blank" href="//libolibo.ru"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column2"><a rel="nofollow noopener" target="_blank" href="//www.youtube.com/channel/UCSG1IlwuZPuzlu2gtU1eXxQ"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column3">-</td>
                <td class="column4"><a rel="nofollow noopener" target="_blank" href="//podcasts.apple.com/ru/podcast/вы-находитесь-здесь/id1545565949"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column5"><a rel="nofollow noopener" target="_blank" href="//castbox.fm/channel/Вы-находитесь-здесь-id3642525?utm_source=website&amp;utm_medium=dlink&amp;utm_campaign=web_share&amp;utm_content=Вы%20находитесь%20здесь-CastBox_FM&amp;country=us"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column6">-</td>
                <td class="column7"><a rel="nofollow noopener" target="_blank" href="//podcasts.google.com/feed/aHR0cHM6Ly9saWJvbGliby5saWJzeW4uY29tL3Jzcw"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
            </tr>
            <tr class="row9">
                <td class="column0">Запуск завтра<br />(от авторов libolibo)</td>
                <td class="column1"><a rel="nofollow noopener" target="_blank" href="//libolibo.ru/zapuskzavtra"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column2"><a rel="nofollow noopener" target="_blank" href="//www.youtube.com/channel/UCSG1IlwuZPuzlu2gtU1eXxQ"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column3">-</td>
                <td class="column4"><a rel="nofollow noopener" target="_blank" href="//podcasts.apple.com/ru/podcast/запуск-завтра/id1488945593"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column5"><a rel="nofollow noopener" target="_blank" href="//castbox.fm/channel/Запуск-завтра-id2476243?country=us"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column6">-</td>
                <td class="column7"><a rel="nofollow noopener" target="_blank" href="//podcasts.google.com/feed/aHR0cHM6Ly96YXB1c2t6YXZ0cmEubGlic3luLmNvbS9yc3M"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
            </tr>
            <tr class="row10">
                <td class="column0">Generic Talks</td>
                <td class="column1"><a rel="nofollow noopener" target="_blank" href="//generictalks.com"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column2"><a rel="nofollow noopener" target="_blank" href="//www.youtube.com/channel/UCLW_8skJ-sIHXACL7HZqchA"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column3"><a rel="nofollow noopener" target="_blank" href="//soundcloud.com/generictalks"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column4"><a rel="nofollow noopener" target="_blank" href="//podcasts.apple.com/pl/podcast/generic-talks/id1489980299"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column5"><a rel="nofollow noopener" target="_blank" href="//castbox.fm/channel/Generic-Talks-id2483477?country=us"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column6"><a rel="nofollow noopener" target="_blank" href="//feeds.soundcloud.com/users/soundcloud:users:702018677/sounds.rss"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column7"><a rel="nofollow noopener" target="_blank" href="//podcasts.google.com/feed/aHR0cDovL2ZlZWRzLnNvdW5kY2xvdWQuY29tL3VzZXJzL3NvdW5kY2xvdWQ6dXNlcnM6NzAyMDE4Njc3L3NvdW5kcy5yc3M"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
            </tr>
            <tr class="row11">
                <td class="column0">The Art Of Programming<br />
                </td>
                <td class="column1"><a rel="nofollow noopener" target="_blank" href="//theartofprogramming.podbean.com"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column2"><a rel="nofollow noopener" target="_blank" href="//www.youtube.com/watch?v=ACrjKBMR2Zg&amp;list=PLpCZVPtCoVaxy_kymebEf2FmXazgl-tPC"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column3">-</td>
                <td class="column4"><a rel="nofollow noopener" target="_blank" href="//podcasts.apple.com/ru/podcast/the-art-of-programming/id1046278525"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column5"><a rel="nofollow noopener" target="_blank" href="//castbox.fm/channel/The-Art-Of-Programming-id1336593?country=us"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column6"><a rel="nofollow noopener" target="_blank" href="//feed.podbean.com/theartofprogramming/feed.xml"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column7"><a rel="nofollow noopener" target="_blank" href="//podcasts.google.com/feed/aHR0cDovL2JpdC5seS9UQU9QcnNz"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
            </tr>
            <tr class="row12">
                <td class="column0">Podlodka Podcast</td>
                <td class="column1"><a rel="nofollow noopener" target="_blank" href="//podlodka.io"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column2"><a rel="nofollow noopener" target="_blank" href="//www.youtube.com/channel/UCOei1E1Vqq10S913OEqTWGw"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column3"><a rel="nofollow noopener" target="_blank" href="//soundcloud.com/podlodka"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column4"><a rel="nofollow noopener" target="_blank" href="//podcasts.apple.com/ru/podcast/podlodka-podcast/id1209828744"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column5"><a rel="nofollow noopener" target="_blank" href="//castbox.fm/channel/Podlodka-Podcast-id483085?country=us"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column6">-</td>
                <td class="column7"><a rel="nofollow noopener" target="_blank" href="//podcasts.google.com/feed/aHR0cHM6Ly9mZWVkcy5zb3VuZGNsb3VkLmNvbS91c2Vycy9zb3VuZGNsb3VkOnVzZXJzOjI5MTMzNzEwNi9zb3VuZHMucnNz"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
            </tr>
            <tr class="row13">
                <td class="column0">Девшахта</td>
                <td class="column1"><a rel="nofollow noopener" target="_blank" href="//medium.com/devschacht"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column2"><a rel="nofollow noopener" target="_blank" href="//www.youtube.com/channel/UCTSVfbCKN3nZbogPtOCHcMg"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column3"><a rel="nofollow noopener" target="_blank" href="//soundcloud.com/devschacht"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column4"><a rel="nofollow noopener" target="_blank" href="//podcasts.apple.com/ru/podcast/девшахта/id1226773343"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column5"><a rel="nofollow noopener" target="_blank" href="//castbox.fm/channel/ДевШахта-id531232?country=us"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column6">-</td>
                <td class="column7"><a rel="nofollow noopener" target="_blank" href="//podcasts.google.com/feed/aHR0cHM6Ly9mZWVkcy5zb3VuZGNsb3VkLmNvbS91c2Vycy9zb3VuZGNsb3VkOnVzZXJzOjI5OTcwMTg4Ni9zb3VuZHMucnNz"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
            </tr>
            <tr class="row14">
                <td class="column0">Веб-стандарты</td>
                <td class="column1"><a rel="nofollow noopener" target="_blank" href="//web-standards.ru"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column2"><a rel="nofollow noopener" target="_blank" href="//www.youtube.com/user/wstdays"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column3"><a rel="nofollow noopener" target="_blank" href="//soundcloud.com/web-standards"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column4"><a rel="nofollow noopener" target="_blank" href="//podcasts.apple.com/ru/podcast/веб-стандарты/id1080500016"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column5"><a rel="nofollow noopener" target="_blank" href="//castbox.fm/channel/Веб-стандарты-id1177814?country=us"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column6"><a rel="nofollow noopener" target="_blank" href="//web-standards.ru/podcast/feed/"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column7"><a rel="nofollow noopener" target="_blank" href="//podcasts.google.com/feed/aHR0cHM6Ly93ZWItc3RhbmRhcmRzLnJ1L3BvZGNhc3QvZmVlZC8"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
            </tr>
            <tr class="row15">
                <td class="column0">Habr Weekly </td>
                <td class="column1"><a rel="nofollow noopener" target="_blank" href="//habr-podcast.com"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column2"><a rel="nofollow noopener" target="_blank" href="//www.youtube.com/channel/UCd_sTwKqVrweTt4oAKY5y4w/videos"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column3"><a rel="nofollow noopener" target="_blank" href="//soundcloud.com/habr-weekly"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column4"><a rel="nofollow noopener" target="_blank" href="//podcasts.apple.com/ru/podcast/habr-weekly/id1464188474?l=en"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column5"><a rel="nofollow noopener" target="_blank" href="//castbox.fm/channel/Habr-Weekly-id2132862?country=us"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column6">-</td>
                <td class="column7"><a rel="nofollow noopener" target="_blank" href="//podcasts.google.com/feed/aHR0cDovL2ZlZWRzLnNvdW5kY2xvdWQuY29tL3VzZXJzL3NvdW5kY2xvdWQ6dXNlcnM6NjM3NjIzMzQyL3NvdW5kcy5yc3M"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
            </tr>
            <tr class="row16">
                <td class="column0">hexlet<br />
                </td>
                <td class="column1"><a rel="nofollow noopener" target="_blank" href="//ru.hexlet.io/blog/categories/podcast"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column2"><a rel="nofollow noopener" target="_blank" href="//www.youtube.com/user/HexletUniversity"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column3"><a rel="nofollow noopener" target="_blank" href="//soundcloud.com/hexlet"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column4"><a rel="nofollow noopener" target="_blank" href="//podcasts.apple.com/ru/podcast/hexlet-хекслет/id1464983290"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column5"><a rel="nofollow noopener" target="_blank" href="//castbox.fm/channel/Hexlet-(Хекслет)-id2904354?country=us"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column6">-</td>
                <td class="column7"><a rel="nofollow noopener" target="_blank" href="//podcasts.google.com/feed/aHR0cHM6Ly9mZWVkcy5yZWRjaXJjbGUuY29tLzg0ZmFlMTQyLTQ4NDItNDI4ZC04NGNiLWRjN2RjNTg3NDE3Zg"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
            </tr>
            <tr class="row17">
                <td class="column0">Мысли и методы<br />
                    (бывший Хекслет)</td>
                <td class="column1"><a rel="nofollow noopener" target="_blank" href="//rakh.im/mimpod/"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column2"><a rel="nofollow noopener" target="_blank" href="//www.youtube.com/user/freetonik"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column3"><a rel="nofollow noopener" target="_blank" href="//soundcloud.com/mimpod"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column4"><a rel="nofollow noopener" target="_blank" href="//podcasts.apple.com/ru/podcast/мысли-и-методы/id1162673070"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column5"><a rel="nofollow noopener" target="_blank" href="//castbox.fm/channel/Мысли-и-методы-id395706?country=us"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column6"><a rel="nofollow noopener" target="_blank" href="//rakh.im/feed.xml"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column7"><a rel="nofollow noopener" target="_blank" href="//podcasts.google.com/feed/aHR0cHM6Ly9wY3IuYXBwbGUuY29tL2lkMTE2MjY3MzA3MA"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
            </tr>
            <tr class="row18">
                <td class="column0">Сделайте мне красиво</td>
                <td class="column1">-</td>
                <td class="column2">-</td>
                <td class="column3"><a rel="nofollow noopener" target="_blank" href="//soundcloud.com/begebot"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column4"><a rel="nofollow noopener" target="_blank" href="//podcasts.apple.com/ru/podcast/сделайте-мне-красиво/id1447645563"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column5"><a rel="nofollow noopener" target="_blank" href="//castbox.fm/channel/Сделайте-мне-красиво-id1819209?country=us"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column6">-</td>
                <td class="column7"><a rel="nofollow noopener" target="_blank" href="//podcasts.google.com/feed/aHR0cDovL2ZlZWRzLmZlZWRidXJuZXIuY29tL2JlZWdlYm90L3Ntaw?sa=X&amp;ved=0CBQQ27cFahcKEwiwgbSfqdjuAhUAAAAAHQAAAAAQCw"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
            </tr>
            <tr class="row19">
                <td class="column0">RadioJSPodcast</td>
                <td class="column1"><a rel="nofollow noopener" target="_blank" href="//radiojs.ru"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column2">-</td>
                <td class="column3">-</td>
                <td class="column4"><a rel="nofollow noopener" target="_blank" href="//podcasts.apple.com/ru/podcast/radiojs/id904938655?l=en"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column5"><a rel="nofollow noopener" target="_blank" href="//castbox.fm/channel/RadioJS-id36138?country=us"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column6"><a rel="nofollow noopener" target="_blank" href="//radiojs.ru/feed/podcast/"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column7"><a rel="nofollow noopener" target="_blank" href="//podcasts.google.com/feed/aHR0cHM6Ly9yYWRpb2pzLnJ1L2ZlZWQvcG9kY2FzdC8"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
            </tr>
            <tr class="row20">
                <td class="column0">5 минутка php</td>
                <td class="column1"><a rel="nofollow noopener" target="_blank" href="//5minphp.ru"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column2"><a rel="nofollow noopener" target="_blank" href="//www.youtube.com/channel/UCkqGd3xwk9LqNYXVTjAe3ww"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column3"><a rel="nofollow noopener" target="_blank" href="//soundcloud.com/5minphp"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column4"><a rel="nofollow noopener" target="_blank" href="//podcasts.apple.com/ru/podcast/пятиминутка-php/id996423650"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column5"><a rel="nofollow noopener" target="_blank" href="//castbox.fm/channel/Пятиминутка-PHP-id36139?country=us"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column6"><a rel="nofollow noopener" target="_blank" href="//castbox.fm/channel/Пятиминутка-PHP-id36139?country=us"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column7"><a rel="nofollow noopener" target="_blank" href="//podcasts.google.com/feed/aHR0cHM6Ly9mZWVkcy5zb3VuZGNsb3VkLmNvbS91c2Vycy9zb3VuZGNsb3VkOnVzZXJzOjE1MzUxOTY1My9zb3VuZHMucnNz?sa=X&amp;ved=0CBwQ27cFahcKEwiwgbSfqdjuAhUAAAAAHQAAAAAQGg"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
            </tr>
            <tr class="row21">
                <td class="column0">5 минутка React</td>
                <td class="column1"><a rel="nofollow noopener" target="_blank" href="//5minreact.ru"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column2"><a rel="nofollow noopener" target="_blank" href="//www.youtube.com/channel/UCtcMCp5GwNdQuloP4v5slfw"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column3"><a rel="nofollow noopener" target="_blank" href="//soundcloud.com/5minreact"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column4"><a rel="nofollow noopener" target="_blank" href="//podcasts.apple.com/ru/podcast/пятиминутка-react/id1178897992"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column5"><a rel="nofollow noopener" target="_blank" href="//castbox.fm/channel/Пятиминутка-React-id529096?country=us"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column6">-</td>
                <td class="column7"><a rel="nofollow noopener" target="_blank" href="//podcasts.google.com/feed/aHR0cHM6Ly9mZWVkcy5zb3VuZGNsb3VkLmNvbS91c2Vycy9zb3VuZGNsb3VkOnVzZXJzOjMwMTI2NDk1Ni9zb3VuZHMucnNz?sa=X&amp;ved=0CCEQ27cFahcKEwiwgbSfqdjuAhUAAAAAHQAAAAAQIg"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
            </tr>
            <tr class="row22">
                <td class="column0">IT-борода</td>
                <td class="column1"><a rel="nofollow noopener" target="_blank" href="//itbeard.com"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column2"><a rel="nofollow noopener" target="_blank" href="//youtube.com/itbeard"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column3"><a rel="nofollow noopener" target="_blank" href="//soundcloud.com/itbeard"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column4"><a rel="nofollow noopener" target="_blank" href="//podcasts.apple.com/ru/podcast/айтиборода/id1449804780"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column5"><a rel="nofollow noopener" target="_blank" href="//castbox.fm/channel/АйТиБорода-id2002151?country=us"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column6">-</td>
                <td class="column7"><a rel="nofollow noopener" target="_blank" href="//podcasts.google.com/feed/aHR0cHM6Ly9mZWVkcy5zb3VuZGNsb3VkLmNvbS91c2Vycy9zb3VuZGNsb3VkOnVzZXJzOjQ4NzQ5MTA0OC9zb3VuZHMucnNz"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
            </tr>
            <tr class="row23">
                <td class="column0">uWebDesign<br />(Суровый веб)</td>
                <td class="column1"><a rel="nofollow noopener" target="_blank" href="//uwebdesign.ru"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column2"><a rel="nofollow noopener" target="_blank" href="//www.youtube.com/channel/UCZeU17nbVfzczAkJVTay9vw"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column3">-</td>
                <td class="column4"><a rel="nofollow noopener" target="_blank" href="//podcasts.apple.com/ru/podcast/суровый-веб-тот-самый-подкаст-от-uwebdesign/id923355344"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column5"><a rel="nofollow noopener" target="_blank" href="//castbox.fm/channel/«Суровый-веб»-—-тот-самый-подкаст-от-uWebDesign-id25627?country=us"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column6"><a rel="nofollow noopener" target="_blank" href="//uwebdesign.ru/feed/podcast/"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column7"><a rel="nofollow noopener" target="_blank" href="//podcasts.google.com/feed/aHR0cHM6Ly91d2ViZGVzaWduLnJ1L2ZlZWQvcG9kY2FzdC8"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
            </tr>
            <tr class="row24">
                <td class="column0">underjs</td>
                <td class="column1"><a rel="nofollow noopener" target="_blank" href="//underjs.ru"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column2"><a rel="nofollow noopener" target="_blank" href="//www.youtube.com/playlist?list=PL2p_GfZz-_1OWXrKUZRBc8LzMz5FJNXW7"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column3"><a rel="nofollow noopener" target="_blank" href="//soundcloud.com/underjs"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column4"><a rel="nofollow noopener" target="_blank" href="//podcasts.apple.com/ru/podcast/underjs-podcast/id1475405773"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column5"><a rel="nofollow noopener" target="_blank" href="//castbox.fm/channel/UnderJS-Podcast-id2229507?country=us"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column6">-</td>
                <td class="column7"><a rel="nofollow noopener" target="_blank" href="//podcasts.google.com/feed/aHR0cHM6Ly91bmRlcmpzLnJ1L2l0dW5lcy54bWw"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
            </tr>
            <tr class="row25">
                <td class="column0">LoftBlog</td>
                <td class="column1"><a rel="nofollow noopener" target="_blank" href="//loftblog.ru/tag/podkast/"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column2">-</td>
                <td class="column3"><a rel="nofollow noopener" target="_blank" href="//soundcloud.com/loftblog"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column4"><a rel="nofollow noopener" target="_blank" href="//podcasts.apple.com/ru/podcast/loftblog/id1313900856"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column5"><a rel="nofollow noopener" target="_blank" href="//castbox.fm/channel/LoftBlog-id1093027?country=us"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column6">-</td>
                <td class="column7"><a rel="nofollow noopener" target="_blank" href="//podcasts.google.com/feed/aHR0cDovL2ZlZWRzLmZlZWRidXJuZXIuY29tL0xvZnRibG9nUG9kY2FzdHM?sa=X&amp;ved=0CAMQ4aUDahcKEwiQ7v_7udjuAhUAAAAAHQAAAAAQJg"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
            </tr>
            <tr class="row26">
                <td class="column0">BeardyCast</td>
                <td class="column1"><a rel="nofollow noopener" target="_blank" href="//beardycast.com/category/podcast/"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column2">-</td>
                <td class="column3">-</td>
                <td class="column4"><a rel="nofollow noopener" target="_blank" href="//podcasts.apple.com/ru/podcast/beardycast-гаджеты-и-медиакультура/id868222886"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column5"><a rel="nofollow noopener" target="_blank" href="//castbox.fm/channel/BeardyCast%3A-гаджеты-и-медиакультура-id2865189?country=us"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column6">-</td>
                <td class="column7"><a rel="nofollow noopener" target="_blank" href="//podcasts.google.com/feed/aHR0cHM6Ly9iZWFyZHljYXN0LmxpYnN5bi5jb20vcnNz"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
            </tr>
            <tr class="row27">
                <td class="column0">Развлекательный IT-подкаст Радиома</td>
                <td class="column1"><a rel="nofollow noopener" target="_blank" href="//radioma.org"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column2"><a rel="nofollow noopener" target="_blank" href="//www.youtube.com/watch?v=V5gNDKBgdR0&amp;list=PLzbMmO3E6j8C0-mL9cYK9XnIqACwMnnz6"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column3">-</td>
                <td class="column4"><a rel="nofollow noopener" target="_blank" href="//podcasts.apple.com/ru/podcast/развлекательный-it-подкаст-радиома/id526797445"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column5">-</td>
                <td class="column6"><a rel="nofollow noopener" target="_blank" href="//feeds.feedburner.com/It-Radioma"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column7"><a rel="nofollow noopener" target="_blank" href="//podcasts.google.com/feed/aHR0cDovL3JhZGlvbWEub3JnLz9mZWVkPXJzczI"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
            </tr>
            <tr class="row28">
                <td class="column0">Android Dev Podcast</td>
                <td class="column1"><a rel="nofollow noopener" target="_blank" href="//androiddev.apptractor.ru"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column2"><a rel="nofollow noopener" target="_blank" href="//www.youtube.com/channel/UCC_-Xb4igFqIhuDyXlD0_eA"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column3"><a rel="nofollow noopener" target="_blank" href="//soundcloud.com/leonid-bogolubov"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column4"><a rel="nofollow noopener" target="_blank" href="//podcasts.apple.com/ru/podcast/android-dev-подкаст/id1076856310?l=en"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column5"><a rel="nofollow noopener" target="_blank" href="//soundcloud.com/leonid-bogolubov"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column6">-</td>
                <td class="column7"><a rel="nofollow noopener" target="_blank" href="//podcasts.google.com/feed/aHR0cHM6Ly9hcHB0cmFjdG9yLnJ1L1BvZGNhc3QvYW5kcm9pZC54bWw/episode/aHR0cHM6Ly9hbmRyb2lkZGV2LmFwcHRyYWN0b3IucnUvYW5kcm9pZC1kZXYtcG9kY2FzdC0xMTcv?sa=X&amp;ved=0CCQQuIEEahgKEwiQ7v_7udjuAhUAAAAAHQAAAAAQgAY"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
            </tr>
            <tr class="row29">
                <td class="column0">Solo on .NET</td>
                <td class="column1"><a rel="nofollow noopener" target="_blank" href="//spbaltnet.podfm.ru/solo/"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column2"><a rel="nofollow noopener" target="_blank" href="//www.youtube.com/playlist?list=PLAFX7TSEV7SOqEQKnrrFiV7bUY8kN5Qof"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column3">-</td>
                <td class="column4"><a rel="nofollow noopener" target="_blank" href="//podcasts.apple.com/ru/podcast/solo-on-net/id730081104"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column5"><a rel="nofollow noopener" target="_blank" href="//castbox.fm/channel/Solo-on-.NET-id45725?country=us"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
                <td class="column6">-</td>
                <td class="column7"><a rel="nofollow noopener" target="_blank" href="//podcasts.google.com/feed/aHR0cHM6Ly9zcGJhbHRuZXQucG9kZm0ucnUvc29sby9yc3MvcnNzLnhtbA"><img src="/images/blog/2021/podcasts/link-32x32.png" width="24" alt="link" loading="lazy"></a></td>
            </tr>
            </tbody>
        </table>


        <h2 id="a-4">Трудности с систематизацией</h2>

        <p>Поддержка видео формата сугубо индивидуальная вещь (о которой я и так знал), но все равно был не прочь хранить все подкасты в Ютубе. Тем более там можно слушать в ускоренном режиме. Там приятный интерфейс и работает система оповещения. Так как только малая часть поддерживает и выкладывает свои записи на Ютуб идея с данным вариантов провалилась. В какой-то момент я был бы не против написать программу (или воспользоваться если уже есть) по работе с rss лентами подкастов, но как оказалось и здесь не все так хорошо (далеко не у всех есть своя лента). Проанализировав таблицу можно было сделать четкий вывод, что apple-подкасты и google-подкасты являются теми сами площадками куда все авторы публикуют контент. Таким образом я был точно уверен, что первое мое требование выполняется. Осталось определится с тем где можно слушать в ускоренном режиме, а также где бы был удобный пользовательский интерфейс и хорошая система уведомлений.</p>


        <p>Если бы я пользовался основным устройством для прослушивания айфонов, а не маком мой бы выбор пал на стандартное приложение “Подкасты от apple”. К тому же для некоторых ОС макбука это приложение так же доступно. Но как оказалось не для моей операционной система. Так же подкасты можно было прослушивать через приложение iTunes (которое уж точно найдется на любом маке), но проблема в том, что там нельзя ускорять запись. По этому не найдя ничего удобного в апп сторе для мака я открыл Гугл подкасты в веб версии. Это оказалось очень простое интерфейсное решение, а главное с возможность увеличения скорости воспроизведения. Однако на веб версии не отображаются статусы выхода новых выпусков того или иногда подкаста, а смотреть в виде писем на почте не очень удобное, а главное спамное дело. Слегка погуглив я не нашел приложения для мака позволяющие прослушивать Гугл подкасты на маке как стороннее приложение с системой оповещения, по этому дополнительно установил себе приложение на айфон для отслеживания уведомлений. Теперь если тот или иной выпуск подкаста меня заинтересует, я отложу айфон в сторону, да бы больше не отвлекаться на него с макбука и не садить батарею мобильного девайста, открою выпуск на маке и детально изучу его. </p>


        <h2 id="a-5">Выводы</h2>
        <p>Конечно же это все мелочи перфекционизма, на каком устройстве слушать и какой источник. Тем не менее благодаря данной анализу можно сделать некоторые следующие выводы:</p>
        <ul>
            <li>Все авторы подкастов публикую подкасты куда им только в голову взбредет, то есть туда куда сами посчитают нужным и видимо где их не забанят. Но даже среди всего разнообразия все стремятся опубликовать себя в Apple - подкастах и Google - подкастах.</li>
            <li>Ютубе является не лучшей площадкой для ведения всего списка подкастов.</li>
            <li>Почти у каждого подкаста существуют свои сайты. Однако мало где можно прослушать запись в ускоренном режиме, что порой является очень важным фактором. Тем не менее просушивали подкастов через специальные приложения или же Гугл подкасты (веб версию) без проблем позволяют настроить скорость воспроизведения</li>
            <li>Что касается удобного интерфейса и системы оповещения, то я бы так же отдал предпочтение таким приложениям как Подкасты от Apple и Гугл - Подкасты, так как они достаточно хорошо справляются со своими прямыми обязанностями.</li>
        </ul>

        <p>Конечно же я чисто физически не буду успевать прослушивать все почти 30 подкастов, а может некоторые показаться скучными и я отпишусь от них совсем. Тем не менее я планирую пристально следить за новыми для себя подкастами и в случае интересующей темы детально останавливаться.
            Надеюсь  данный список будет кому-то полезен. В случае если заметили ошибку в таблице или хотите ее как-то дополнить его предложение так же принимаются.</p>

        <p><b>Upd:</b> С момента написания черновика для статьи прошло примерно 3 недели, и за это время я уже успел подсесть на парочку новых подкастов для себя не отнимая времени от старых. Таким образом можно сделать вывод, что пристальный анализ подкастов и последующая систематизация их не были напрасны.</p>

    </article>
</main>
<?php include DOCUMENT_ROOT . '/view/v3/footer.php'; ?>
<?php include DOCUMENT_ROOT . '/view/v3/js-scripts.php'; ?>
</body>
</html>
