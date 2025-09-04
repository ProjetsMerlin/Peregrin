<!DOCTYPE html>
<html
    lang="<?php if($trad["lang_code"]) : echo $trad["lang_code"]; else : echo 'fr-BE'; endif; ?>"
    dir="<?php if($trad["lang_direction"]) : echo $trad["lang_direction"]; else : echo 'ltr'; endif; ?>">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- METADATA -->
        <title><?= $site_title;?></title>
        <meta name="description" content="<?= $trad['site_description'];?>">
        <meta name="robots" content="all">
        <meta name="language" content="<?= $trad["lang_code"];?>">
        <meta name="author" content="<?= $site_author;?>">

        <!-- MAPPING  -->
        <base href="<?= $url_base;?>">
        <link rel="canonical" href="<?= $url_base;?><?= $lang;?>/<?= $trad[$lang."_".$page];?>" />
        <link rel="alternate" type="application/rss+xml" title="RSS" href="<?= $url_base;?>/seo/sitemap.xml">

        <!-- FAVICONS -->
        <?= runFavicons($site_title);?>

        <!-- BALISES OGG -->
        <?= runBalisesOgg($site_title,$trad['site_description'],$url_base, $trad["lang_code"]) ; ?>

        <!-- CSS -->
        <link rel="stylesheet" href="assets/style/peregrin.css">

        <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><![endif]-->
    </head>

    <body class="peregrin" data-template="<?= $page;?>" data-lang="<?= $lang;?>"
        data-url="<?= $url_base;?><?= $lang;?>/<?= $trad[$lang."_".$page];?>" data-base="<?= $url_base;?>"
        data-uri="<?php if( !empty($get_page)) : echo $get_page; else : echo ""; endif;?>">