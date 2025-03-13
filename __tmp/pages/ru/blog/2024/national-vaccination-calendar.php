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

        <p>Знаете ли вы, что такое национальный календарь прививок? Если нет, то самое время познакомиться с этим термином, а скорее даже инстанцией.</p>

        <p>Вообще говоря определение этого крайне короткое. Это все прививки, которые могут быть как обязательными, так и рекомендованными для граждан конкретной страны. Как вы уже поняли от страны к стране и тем более от континента к континенту данный список может значительно отличаться. Так, например для жителей Беларуси национальный календарь прививок содержит прививки против таких вирусов как: гепатит B, туберкулез (причем как более лайтовая БЦЖ-М, так и более сильная БЦЖ), дифтерия, столбняк, коклюш и прочие прививки. Прививки от некоторых вирусов могут быть объединены в одну прививку. Более полный перечень прививок для жителей РБ можно найти по адресу.</p>

        <p>Помимо перечня прививок национальный календарь прививок также устанавливает возраст, в котором необходимо проводить те или иные прививки, а также в целом их количество / периодичность.</p>

        <p>В рамках одного континента или соседних стран перечень прививок как правило не сильно отличается. Но ситуация может меняться, если речь идет о других континентах. Так, например, в Африке рекомендуется делать прививку от желтой лихорадки, менингококковой инфекции или других опасностей на микроуровне. Поэтому, планируя поездку на тот или иной континент следует обращать внимание на местные медицинские особенности и не полениться посмотреть национальный календарь прививок страны, куда вы направляетесь.</p>

        <p>В завершение поста оставлю ссылки на национальный календарь прививок некоторых стран:<br>
        <a href="https://skkdkb.ru/pacientam/informaciya-dlya-roditelej/nacionalnyj-kalendar-profilakticheskih-privivok.html" rel="nofollow noopener" target="_blank">Календарь прививок в России</a><br>
        <a href="https://www.cdc.gov/vaccines/schedules/hcp/imz/child-adolescent.html?CDC_AA_refVal=https%3A%2F%2Fwww.cdc.gov%2Fvaccines%2Fschedules%2Fhcp%2Fchild-adolescent.html" rel="nofollow noopener" target="_blank">Календарь прививок в США</a><br>
        <a href="https://1796web.com/pdfs/Impfkalender2021.pdf" rel="nofollow noopener" target="_blank">Календарь прививок в Германии</a><br>
        <a href="https://www.growyourstaff.com/immunization-schedule-in-india/" rel="nofollow noopener" target="_blank">Календарь прививок в Индии</a></p>


    </div>
</main>
<?php include DOCUMENT_ROOT . '/view/v3/footer.php'; ?>
<?php include DOCUMENT_ROOT . '/view/v3/js-scripts.php'; ?>
</body>
</html>

