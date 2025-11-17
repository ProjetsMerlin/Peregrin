<?php
/* PARAMETERS */
require_once('data/config.php');

/* BASE URL */
$protocol = !empty($_SERVER["HTTPS"]) ? "https" : "http";
$url_base = $protocol . '://' . $domain . '/';
$default_langage = $possible_langage[0];

/* REDIRECTION */
$template_page = "";
if (!isset($_GET) || empty($_GET["lang"])) {
    $site_url = $protocol . '://' . $domain . '/' . $default_langage . "/";
    header("Location: $site_url");
} else if ($_GET["lang"] && empty($_GET["page"])) {
    if (in_array(htmlspecialchars($_GET["lang"]), $possible_langage) === true) {
        $get_lang = htmlspecialchars($_GET["lang"]);
        include('data/lang/' . $get_lang . '.php');
        $slug_page = "";
    } else {
        $get_lang = $default_langage;
        include('data/lang/' . $get_lang . '.php');
        $slug_page = "404";
    }
} else if ($_GET["lang"] && $_GET["page"]) {
    if (in_array(htmlspecialchars($_GET["lang"]), $possible_langage) === true) {
        $get_lang = htmlspecialchars($_GET["lang"]);
        include('data/lang/' . $get_lang . '.php');
        $slug_page = htmlspecialchars($_GET["page"]);
    } else {
        $get_lang = $default_langage;
        include('data/lang/' . $get_lang . '.php');
        $slug_page = "404";
    }
}

include("data/rewriting.php");
$uri = $slug_page;
$slug_page = $routes[$get_lang][$slug_page];
$template_page = "content/pages/" . $slug_page . ".php";
include_once($template_page);
