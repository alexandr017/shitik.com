<?php

$title = $page['title'];
$metaDescription = $page['meta_description'];

includeCSS(['modules/general', 'modules/fonts', 'index']);

echo renderView('v3/modules/head.php', compact('title', 'metaDescription'));
$currentLang = getLocale();

//$about = [
//    'about' => [
//        'ru' => 'О себе',
//        'en' => 'About Me',
//        'de' => 'Über mich',
//        'fr' => 'À propos de moi',
//        'es' => 'Sobre mi',
//        'pt' => 'Sobre mim',
//        'zh' => '关于我',
//        'hi' => 'मेरे बारे में'
//    ],
//    'blog' => [
//        'ru' => 'Блог',
//        'en' => 'Blog',
//        'de' => 'Blog',
//        'fr' => 'Blog',
//        'es' => 'Blog',
//        'pt' => 'Blog',
//        'zh' => '博客',
//        'hi' => 'ब्लॉग'
//    ],
//    'travels' => [
//        'ru' => 'Путешествия',
//        'en' => 'Travels',
//        'de' => 'Reisen',
//        'fr' => 'Voyages',
//        'es' => 'Viajes',
//        'pt' => 'Viagens',
//        'zh' => '旅行',
//        'hi' => 'यात्राएँ'
//    ],
//    'library' => [
//        'ru' => 'Библиотека',
//        'en' => 'Library',
//        'de' => 'Bibliothek',
//        'fr' => 'Bibliothèque',
//        'es' => 'Biblioteca',
//        'pt' => 'Biblioteca',
//        'zh' => '图书馆',
//        'hi' => 'पुस्तकालय'
//    ],
//    'stats' => [
//        'ru' => 'Статистика',
//        'en' => 'Statistics',
//        'de' => 'Statistik',
//        'fr' => 'Statistiques',
//        'es' => 'Estadísticas',
//        'pt' => 'Estatísticas',
//        'zh' => '统计',
//        'hi' => 'सांख्यिकी'
//    ],
//    'soon-new-section' => [
//        'ru' => 'Скоро новый раздел',
//        'en' => 'A new section is coming soon',
//        'de' => 'Bald kommt ein neuer Abschnitt',
//        'fr' => 'Une nouvelle section arrive bientôt',
//        'es' => 'Pronto habrá una nueva sección',
//        'pt' => 'Em breve, uma nova seção',
//        'zh' => '即将推出新栏目',
//        'hi' => 'जल्द ही एक नया अनुभाग आएगा'
//    ]
//];
?>
<body>
<div class="modules-wrap">
    <a href="/<?php echo $currentLang; ?>/alexandr-andreevich" class="item lightning-effect"><span class="icon icon-man"></span><?php echo lang('template-index.about') ?></a>
    <a href="/<?php echo $currentLang; ?>/blog" class="item lightning-effect"><span class="icon icon-blog"></span><?php echo lang('template-index.blog') ?></a>
    <a href="/<?php echo $currentLang; ?>/travels" class="item lightning-effect"><span class="icon icon-travel"></span><?php echo lang('template-index.travels') ?></a>
    <a href="/<?php echo $currentLang; ?>/library" class="item lightning-effect"><span class="icon icon-library"></span><?php echo lang('template-index.library') ?></a>
    <div class="item purple lightning-effect">Shitik.com<br><span class="icon-big icon-site"></span> <h1><?php echo $page['h1'] ?? '' ?></h1></div>
    <a href="/<?php echo $currentLang; ?>/stats" class="item lightning-effect"><span class="icon icon-stats"></span><?php echo lang('template-index.stats') ?></a>
    <div class="item disable"><span class="icon disable icon-lock"></span><?php echo lang('template-index.soon-new-section') ?></div>
    <div class="item disable"><span class="icon disable icon-lock"></span><?php echo lang('template-index.soon-new-section') ?></div>
    <div class="item disable"><span class="icon disable icon-lock"></span><?php echo lang('template-index.soon-new-section') ?></div>
</div>
<?php echo renderView('v3/modules/micro-data.php'); ?>
<?php echo renderView('v3/modules/js-scripts.php'); ?>
</body>
</html>