<!DOCTYPE html>
<html lang="<?php if ($trad["lang_code"]) : echo $trad["lang_code"];
            else : echo 'fr-BE';
            endif; ?>" dir="<?php if ($trad["lang_direction"]) : echo $trad["lang_direction"];
                            else : echo 'ltr';
                            endif; ?>">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- METADATA -->
    <title><?= $metadata["title"]; ?></title>
    <meta name="description" content="<?= $metadata["description"]; ?>">
    <meta name="language" content="<?= $trad["lang_code"]; ?>">
    <meta name="author" content="<?= $site_author; ?>">

    <!-- MAPPING  -->
    <base href="<?= $url_base; ?>">
    <link rel="canonical" href="<?= $url_base; ?><?= $get_lang; ?>/<?= $slug_page ?? ""; ?>" />
    <link rel="alternate" type="application/rss+xml" title="RSS" href="<?= $url_base; ?>sitemap.xml">

    <!-- FAVICONS -->
    <?= runFavicons($metadata["title"]); ?>

    <!-- BALISES OGG -->
    <?= runBalisesOgg($metadata["title"], $metadata["description"], $url_base, $trad["lang_code"]); ?>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/styles/main.css">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><![endif]-->
</head>

<body class="peregrin" data-template="<?= $slug_page; ?>" data-lang="<?= $get_lang; ?>"
    data-url="<?= $url_base; ?><?= $get_lang; ?>/<?= $uri; ?>" data-base="<?= $url_base; ?>" data-uri="<?= $uri; ?>">
