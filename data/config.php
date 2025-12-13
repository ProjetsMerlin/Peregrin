<?php

/* PARAMETERS */
/* -|--|--|--|--|--|--|--|--|--|--|--|--|--|--|- */
$site_version = 1.2;
$hide_folder = "/admin\/";
$possible_langage = array('fr', 'nl');
$metadata["title"] = "Peregrin";
$metadata["description"] = "Mon template PHP de base";
$site_author = "lintermediaire.be";
$domain_production = "lintermediaire.be/peregrin";
$domain_local = "localhost/projets/peregrin";
/* -|--|--|--|--|--|--|--|--|--|--|--|--|--|--|- */

if ($_SERVER['SERVER_NAME'] !== "localhost") {
  $domain = 'lintermediaire.be/peregrin';
} else {
  $domain = "localhost/projets/peregrin";
}

function runBalisesOgg($site_title, $site_content, $url_online, $lang)
{
  $result = '
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="apple-mobile-web-app-title" content="' . $site_title . '">
  
  <meta property="og:title" content="' . $site_title . '" />
  <meta property="og:description" content="' . $site_content . '" />
  <meta property="og:image" content="' . $url_online . 'assets/img/seo/share.png" />
  <meta property="og:url" content="' . $url_online . '" />
  <meta property="og:type" content="website">
  <meta property="og:locale" content="' . $lang . '" />
  
  <meta name="twitter:title" content="' . $site_title . '" />
  <meta name="twitter:description" content="' . $site_content . '" />
  <meta name="twitter:image" content="' . $url_online . 'assets/img/seo/share.png" />
  <meta name="twitter:url" content="' . $url_online . '" />
  
  <meta property="og:title" content="' . $site_title . '" />
  <meta property="og:description" content="' . $site_content . '" />
  <meta property="og:image" content="' . $url_online . 'assets/img/seo/share.png" />
  <meta property="og:url" content="' . $url_online . '" />
  ';
  return $result;
}

/* run favicons on : https://realfavicongenerator.net/ */
function runFavicons()
{
  $favicons = <<<HTML
  <link rel="icon" type="image/png" href="assets/img/seo/favicons/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/svg+xml" href="assets/img/seo/favicons/favicon.svg" />
  <link rel="shortcut icon" href="assets/img/seo/favicons/favicon.ico" />
  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/seo/favicons/apple-touch-icon.png" />
  <link rel="manifest" href="assets/img/seo/favicons/site.webmanifest" />
  HTML;

  return $favicons;
}

function custom_error_handler($errno, $errstr, $errfile, $errline)
{
  $error_message = "[" . date("Y-m-d H:i:s") . "] ";
  $error_message .= "Erreur : [$errno] $errstr - Fichier : $errfile - Ligne : $errline\n";
  $log_file = __DIR__ . '/error_log.txt';
  error_log($error_message, 3, $log_file);

  if (ini_get("display_errors")) {
    echo $error_message;
  }

  return false;
}
set_error_handler("custom_error_handler");

register_shutdown_function(function () {
  $error = error_get_last();
  if ($error !== null && ($error['type'] === E_ERROR || $error['type'] === E_PARSE)) {
    custom_error_handler($error['type'], $error['message'], $error['file'], $error['line']);
  }
});

error_reporting(E_ALL);
