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
        <div><img style="max-height: 450px; margin: auto" class="post-img" src="/images/blog/2021/new-super-heroes/new-super-heroes-0.jpg" alt="" loading="lazy"></div>

        <p>Наверняка почти каждый из вас видел хотя бы один из кучи фильмов студий Marvel и DC, где в каждой из них они спасают планету от внутренних и внешних угроз. А что если все злодеи, которые во всех фильмах раньше нападали на штаты вдруг изменят свою тактику и нападут на нас? Есть ли у нас свои супер-герои, которые смогут защитить нас от всех угроз? Какой ответ мы подготовили Marvel и DC? Есть ли у нас такие герои, о ком можно было снимать полноценные фильмы? Пожалуй есть, и я сейчас не о 3ех богатырях. Я уже позаботился об этом и для будущих режиссеров и сценаристов подобрал некоторых супер-героев. И так поехали:</p>
        <p>Пожалуй для разогрева начнем с девушек. В первую очередь можно выделить <b>бабу Любу</b>, <b>женщина с кандибобером на голове</b> ну и конечно же <b>Наталья морская пехота</b>.</p>
        <div><img style="max-height: 450px; margin: auto" class="post-img" src="/images/blog/2021/new-super-heroes/new-super-heroes-1.jpg" alt="" loading="lazy"></div>
        <div><img style="max-height: 450px; margin: auto" class="post-img" src="/images/blog/2021/new-super-heroes/new-super-heroes-2.jpg" alt="" loading="lazy"></div>
        <p>Теперь на защиту галактики выпустим сильный пол <b>Славик буйный</b>, <b>Дичанутый дядя Костя</b>, <b>Витя-боярышник</b>. Они запросто наволяют Тони старку, бэтмену и человеку-пауку</p>
        <div><img style="max-height: 450px; margin: auto" class="post-img" src="/images/blog/2021/new-super-heroes/new-super-heroes-3.jpg" alt="" loading="lazy"></div>
        <div><img style="max-height: 450px; margin: auto" class="post-img" src="/images/blog/2021/new-super-heroes/new-super-heroes-4.jpg" alt="" loading="lazy"></div>
        <p>Пришло время выпускать тяжелую артиллерию. Надежда всей галактики <b>Олег Монгол</b></p>
        <div><img style="max-height: 450px; margin: auto" class="post-img" src="/images/blog/2021/new-super-heroes/new-super-heroes-5.jpg" alt="" loading="lazy"></div>
        <p>Конечно ему тяжело одному и на помощь всегда рады прийти его верные друзья <b>Иришка Чики-Пики</b> и <b>Безумный Паша</b>, которые без проблем ушатают Флэша и капитана Америку.</p>
        <div><img style="max-height: 450px; margin: auto" class="post-img" src="/images/blog/2021/new-super-heroes/new-super-heroes-6.jpg" alt="" loading="lazy"></div>
        <p>На случай если мы будем проигрывать, можно прибегнуть к нестандартным персонажам и их методам.</p>
        <div><img style="max-height: 450px; margin: auto" class="post-img" src="/images/blog/2021/new-super-heroes/new-super-heroes-7.jpg" alt="" loading="lazy"></div>
        <div><img style="max-height: 450px; margin: auto" class="post-img" src="/images/blog/2021/new-super-heroes/new-super-heroes-8.jpg" alt="" loading="lazy"></div>
        <blockquote class="blockquote">
            <p>- Я хочу себе суперспособности как у Артемия Лебедева!<br>
                - Хотите быть успешным бизнесменом?<br>
                - Нет, хочу отc**cать сам у себя!</p>
        </blockquote>

        <p>Если все перечисленные герои не будут справляться со своими делами всегда можно прибегнуть к плану Б и вызвать алко-героев. <b>Дядя Витя</b>, <b>естественный чувак</b>, <b>батя которому всегда нормально</b>, <b>дедушка бом-бом</b>, <b>заминированный по**ист</b> и <b>человек-аплодисменты</b> - это именно те люди, на которые я бы оставил нашу с вами безопасность и спал спокойной.</p>
        <div><img style="max-height: 450px; margin: auto" class="post-img" src="/images/blog/2021/new-super-heroes/new-super-heroes-9.jpg" alt="" loading="lazy"></div>


    </div>
</main>
<?php include DOCUMENT_ROOT . '/view/v3/footer.php'; ?>
<?php include DOCUMENT_ROOT . '/view/v3/js-scripts.php'; ?>
</body>
</html>

