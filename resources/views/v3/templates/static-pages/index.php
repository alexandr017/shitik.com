<?php
$title = $page['title'];
$metaDescription = $page['meta_description'];

includeCSS(['modules/general', 'modules/fonts', 'index']);

$alternates = [
    (object) ['lang' => 'en', 'url' => 'en'],
    (object) ['lang' => 'ru', 'url' => 'ru'],
    (object) ['lang' => 'es', 'url' => 'es'],
    (object) ['lang' => 'pt', 'url' => 'pt'],
    (object) ['lang' => 'fr', 'url' => 'fr'],
    (object) ['lang' => 'de', 'url' => 'de'],
    (object) ['lang' => 'zh', 'url' => 'zh'],
    (object) ['lang' => 'hi', 'url' => 'hi'],
];
foreach ($alternates as $key => $alternate) {
    if ($alternate->lang == getLocale()) {
        unset($alternates[$key]);
    }
}

echo renderView('v3/modules/head.php', compact('title', 'metaDescription', 'alternates'));
$currentLang = getLocale();
?>
<body>
<div class="modules-wrap">
    <a href="/<?php echo $currentLang; ?>/alexandr-andreevich" class="item lightning-effect"><span class="icon icon-man"></span><?php echo lang('template-index.about') ?></a>
    <a href="/<?php echo $currentLang; ?>/blog" class="item lightning-effect"><span class="icon icon-blog"></span><?php echo lang('template-index.blog') ?></a>
    <a href="/<?php echo $currentLang; ?>/travels" class="item lightning-effect"><span class="icon icon-travel"></span><?php echo lang('template-index.travels') ?></a>
    <a href="/<?php echo $currentLang; ?>/library" class="item lightning-effect"><span class="icon icon-library"></span><?php echo lang('template-index.library') ?></a>
    <div class="item purple lightning-effect">Shitik.com<br><span class="icon-big icon-site"></span> <h1><?php echo $page['h1'] ?? '' ?></h1></div>
    <a href="/<?php echo $currentLang; ?>/stats" class="item lightning-effect"><span class="icon icon-stats"></span><?php echo lang('template-index.stats') ?></a>
    <a href="/<?php echo $currentLang; ?>/movies" class="item lightning-effect"><span class="icon icon-movies"></span><?php echo lang('template-index.movies') ?></a>
    <div class="item disable"><span class="icon disable icon-lock"></span><?php echo lang('template-index.soon-new-section') ?></div>
    <div class="item disable"><span class="icon disable icon-lock"></span><?php echo lang('template-index.soon-new-section') ?></div>
</div>
<?php echo renderView('v3/modules/micro-data.php'); ?>
<?php echo renderView('v3/modules/js-scripts.php'); ?>
</body>
</html>