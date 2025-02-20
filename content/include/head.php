<!DOCTYPE html>
<html lang="<?= $trad['lang_code'];?>">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $site_title;?></title>
        <meta name="description" content="<?= $trad['site_description'];?>">
        <meta name="robots" content="all">
        <meta name="language" content="<?= $lang;?>">
        <meta name="author" content="<?= $site_author;?>">

        <!-- BALISES OGG -->
        <?= runBalisesOgg($site_title,$site_content,$url_base, $trad['lang_code']) ; ?>
        <!--  -->

        <base href="<?= $url_base;?>">

        <link rel="icon" type="image/x-icon" href="seo/favicon.png">
        <link rel="stylesheet" href="assets/style/peregrin.css">
    </head>

    <body class="peregrin" data-template="<?= $page;?>" data-lang="<?= $lang;?>" data-base="<?= $url_base;?>"
        data-uri="<?php if( !empty($get_page)) : echo $get_page; else : echo ""; endif;?>">