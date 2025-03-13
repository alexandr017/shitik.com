<?php
$title = $page['title'];
$metaDescription = $page['meta_description'];
includeCSS(['modules/general', 'modules/fonts', 'index']);
echo renderView('v3/modules/head.php', compact('title', 'metaDescription'));
?>
<body>
<div class="modules-wrap">
    <a href="/en" class="item lightning-effect"><span style="background: url('/themes/v3/images/flags/us.png'); background-size: contain;" class="icon icon-man"></span>English</a>
    <a href="/es" class="item lightning-effect"><span style="background: url('/themes/v3/images/flags/es.png'); background-size: contain;" class="icon icon-blog"></span>Español</a>
    <a href="/ru" class="item lightning-effect"><span style="background: url('/themes/v3/images/flags/ru.png'); background-size: contain;" class="icon icon-portfolio"></span>Русский</a>
    <a href="/pt" class="item lightning-effect"><span style="background: url('/themes/v3/images/flags/pt.png'); background-size: contain;" class="icon icon-travel"></span>Português</a>
    <div class="item purple lightning-effect">Shitik.com<br><span class="icon-big icon-site"></span> <h1><?php echo $page['h1'] ?? '' ?></h1></div>
    <a href="/zh" class="item lightning-effect"><span style="background: url('/themes/v3/images/flags/cn.png'); background-size: contain;" class="icon icon-projects"></span>简体中文</a>
    <a href="/fr" class="item lightning-effect"><span style="background: url('/themes/v3/images/flags/fr.png'); background-size: contain;" class="icon icon-library"></span>Français</a>
    <a href="/de" class="item lightning-effect"><span style="background: url('/themes/v3/images/flags/de.png'); background-size: contain;" class="icon icon-stats"></span>Deutsch</a>
    <a href="/hi" class="item lightning-effect"><span style="background: url('/themes/v3/images/flags/in.png'); background-size: contain;" class="icon icon-web"></span>हिन्दी</a>
</div>
<?php echo renderView('v3/modules/micro-data.php'); ?>
<?php echo renderView('v3/modules/js-scripts.php'); ?>
</body>
</html>