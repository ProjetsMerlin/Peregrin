<!DOCTYPE html>
<html lang="<?= $trad['lang_code'];?>">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site_title;?></title>
    <meta name="description" content="<?= $site_description;?>">
    <meta name="robots" content="all">
    <meta name="language" content="<?= $lang;?>">
    <meta name="author" content="<?= $site_author;?>">

    <!--Balises OG-->
    <meta property="og:title" content="<?= $site_title;?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= $url_base;?>">
    <meta property="og:image" content="seo/share.png">
    <!---->

    <base href="<?= $url_base;?>">

    <link rel="shortcut icon" type="image/x-icon" href="seo/favicon.png">
    <link rel="stylesheet" href="assets/style/peregrin.css">
</head>

<body class="peregrin" data-template="<?= $page;?>" data-lang="<?= $lang;?>" data-base="<?= $url_base;?>"
    data-uri="<?php if( !empty($get_page)) : echo $get_page; else : echo ""; endif;?>">