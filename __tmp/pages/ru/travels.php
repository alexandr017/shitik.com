<?php
includeCSS(['modules/general', 'modules/fonts', 'modules/header', 'modules/breadcrumb', 'modules/content']);
include DOCUMENT_ROOT . '/view/v3/head.php';
?>
<body>
<?php include DOCUMENT_ROOT . '/view/v3/menu.php'; ?>
<main class="container">
    <ul class="breadcrumb">
        <li><a href="/ru">Главная</a></li>
        <li class="active">Путешествия</li>
    </ul>
    <div class="content">
         <p>Среди всех увлечений отдельным пунктом стоят путешествия. Лишь с 2019 года стал активно путешествовать, но в период пандемии пришлось слегка поставить на паузу мои поездки и полеты. Тем не менее в планах еще много стран и городов. Если кому-то интересны фото и видео с поездок, то можно запросить у меня дополнительно:</p>
        <ul>
            <li>🇱🇻 Латвия (2019)</li>
            <li>🇮🇸 Исландия (2019)</li>
            <li>🇱🇹 Литва (2019)</li>
            <li>🇵🇱 Польша (2019)</li>
            <li>🇳🇱Голландия (2019)</li>
            <li>🇺🇦 Украина (2019)</li>
            <li>🇨🇾 Кипр (2019)</li>
            <li>🇷🇺 Россия (2021)</li>
            <li>🇦🇿 Азербайджан (2024)</li>
            <li>🇬🇪 Грузия (2024)</li>
            <li>🇨🇳 Китай (2024)</li>
            <li>🇮🇩 Индонезия (Бали) (2024)</li>
        </ul>
    </div>
</main>
<?php include DOCUMENT_ROOT . '/view/v3/footer.php'; ?>
<?php include DOCUMENT_ROOT . '/view/v3/js-scripts.php'; ?>
</body>
</html>


