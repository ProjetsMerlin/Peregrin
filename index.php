<?php
/* PARAMETERS */
require_once('data/config.php');

/* BASE URL */
$protocol = !empty($_SERVER["HTTPS"]) ? "https" : "http";
if ($_SERVER['SERVER_NAME'] === "localhost") {
    $domain = $url_local;
}
else {
    $domain = $url_online;
}
$url_base = $protocol . '://' . $domain . '/';
$default_langage = $possible_langage[0];

/* REDIRECTION */
$template_page = "";
if(!isset($_GET) || empty($_GET["lang"]) ) {
    $site_url = $protocol . '://' . $domain . '/' . $default_langage;
}
else if($_GET["lang"] && empty($_GET["page"]) ) {
    if( in_array(htmlspecialchars($_GET["lang"]), $possible_langage) === true) {
        $get_lang = htmlspecialchars($_GET["lang"]);
        include('data/lang/'.$get_lang.'.php');
        $slug_page = "home";
        $template_page ='content/pages/home.php';
    }
    else {
        $get_lang = $default_langage;
        include('data/lang/'.$get_lang.'.php');
        $slug_page = "404";
        $template_page ='content/pages/404.php';
    }
}
else if($_GET["lang"] && $_GET["page"] ) {
    if( in_array(htmlspecialchars($_GET["lang"]), $possible_langage) === true) {
        $get_lang = htmlspecialchars($_GET["lang"]);
        include('data/lang/'.$get_lang.'.php');
        $get_page = htmlspecialchars($_GET["page"]);
        include("data/rewriting.php");
        $template_page ='content/pages/' . $slug_page . '.php';
    }
    else {
        $site_url = $protocol . '://' . $domain . '/' . $default_langage . '/404';
    }
}

if(!$template_page) {
   header('Location: ' . $site_url);
   exit;
}
else {
    $lang = htmlspecialchars($_GET["lang"]);
    $page = $slug_page;
    include_once($template_page);
}