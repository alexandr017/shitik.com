<!DOCTYPE html>
<html lang="<?php echo getLocale() ?>" prefix="og: https://ogp.me/ns#">
<head>
    <title><?php echo $title ?? '' ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Alexandr Shitik">
    <meta name="description" content="<?php echo $metaDescription ?? '' ?>">
    <meta name="format-detection" content="telephone=no">

    <meta property="og:locale" content="<?php echo getLocale() ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $title ?? '' ?>">
    <meta property="og:description" content="<?php echo $metaDescription ?? '' ?>">
    <meta property="og:url" content="<?php echo getCurrentUrl() ?>">
    <meta property="og:image" content="<?php echo $preview ?? '/themes/v3/images/index/logo.png'?>">
    <meta property="og:site_name" content="shitik.com">

    <link rel="canonical" href="<?php echo getCurrentUrl() ?>">
    <link rel="icon" href="/themes/v3/images/index/logo-white.png" type="image/png">
    <style><?php printCSS(); ?></style>
</head>