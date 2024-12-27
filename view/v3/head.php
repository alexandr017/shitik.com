<!DOCTYPE html>
<html lang="ru" prefix="og: https://ogp.me/ns#">
<head>
    <title><?php echo getSeoField('title') ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Alexandr Shitik" />
    <meta name="description" content="<?php echo getSeoField('metaDescription') ?>" />
    <meta name="format-detection" content="telephone=no">

    <meta property="og:locale" content="ru_RU" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?php echo getSeoField('title') ?>" />
    <meta property="og:description" content="<?php echo getSeoField('metaDescription') ?>" />
    <meta property="og:url" content="<?php echo getSeoField('url') ?>" />
    <meta property="og:image" content="<?php echo getSeoField('preview'); ?>" />
    <meta property="og:site_name" content="#ShitikCom" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="<?php echo getSeoField('metaDescription') ?>" />
    <meta name="twitter:title" content="<?php echo getSeoField('title') ?>" />

    <link rel="canonical" href="<?php echo getSeoField('canonical'); ?>" />
    <link rel="icon" href="/themes/v3/images/index/logo.svg" type="image/svg+xml">
    <style><?php printCSS(); ?></style>
</head>