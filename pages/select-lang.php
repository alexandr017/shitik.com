<?php
includeCSS(['modules/general', 'modules/fonts', 'index']);
include DOCUMENT_ROOT . '/view/v3/head.php';
?>
<body>
<div class="modules-wrap">
    <span data-href="/en" class="item lightning-effect disable"><span style="background: url('/themes/v3/images/flags/us.png'); background-size: contain;" class="icon icon-man"></span>English <br>(soon)</span>
    <span data-href="/es" class="item lightning-effect disable"><span style="background: url('/themes/v3/images/flags/es.png'); background-size: contain;" class="icon icon-blog"></span>Español<br>(pronto)</span>
    <a href="/ru" class="item lightning-effect"><span style="background: url('/themes/v3/images/flags/ru.png'); background-size: contain;" class="icon icon-portfolio"></span>Русский</a>
    <span data-href="/pt" class="item lightning-effect disable"><span style="background: url('/themes/v3/images/flags/pt.png'); background-size: contain;" class="icon icon-travel"></span>Português<br>(breve)</span>
    <div class="item purple lightning-effect"><span class="icon icon-site"></span>Shitik.com</div>
    <span data-href="/cn" class="item lightning-effect disable"><span style="background: url('/themes/v3/images/flags/cn.png'); background-size: contain;" class="icon icon-projects"></span>简体中文<br>(很快)</span>
    <span data-href="/fr" class="item lightning-effect disable"><span style="background: url('/themes/v3/images/flags/fr.png'); background-size: contain;" class="icon icon-library"></span>Français<br>(soon)</span>
    <span data-href="/de" class="item lightning-effect disable"><span style="background: url('/themes/v3/images/flags/de.png'); background-size: contain;" class="icon icon-stats"></span>Deutsch<br>(bientôt)</span>
    <span data-href="/it" class="item lightning-effect disable"><span style="background: url('/themes/v3/images/flags/it.png'); background-size: contain;" class="icon icon-web"></span>Italiano<br>(presto)</span>
</div>
<?php include DOCUMENT_ROOT . '/view/v3/micro-data.php'; ?>
<?php include DOCUMENT_ROOT . '/view/v3/js-scripts.php'; ?>
</body>
</html>