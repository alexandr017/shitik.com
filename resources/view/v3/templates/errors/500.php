<?php http_response_code(500); ?>
<?php
includeCSS(['modules/general', 'modules/fonts', 'modules/header', 'modules/breadcrumb', 'modules/content', 'modules/footer']);
echo renderView('v3/modules/head.php');
?>
<body>
<?php echo renderView('v3/modules/menu.php'); ?>
<main class="container">
    <ul class="breadcrumb">
        <li><a href="/<?php echo getLocale(); ?>"><?php echo lang('breadcrumb.index'); ?></a></li>
        <li class="active"><?php echo lang('template-error-500.h1'); ?></li>
    </ul>
    <div class="content">
        <h1><?php echo lang('template-error-500.h1'); ?></h1>
        <?php if (getEnvValue('APP_ENV') == 'local') : ?>
            <?php echo $exception; ?>
        <?php else : ?>
            <p><?php echo lang('template-error-500.message'); ?></p>
        <?php endif; ?>
    </div>
</main>
<?php echo renderView('v3/modules/footer.php'); ?>
<?php echo renderView('v3/modules/js-scripts.php'); ?>
</body>
</html>
<?php die(); ?>