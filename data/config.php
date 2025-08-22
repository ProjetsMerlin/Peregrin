<?php
/* PARAMETERS */
$url_local = 'localhost/projets/perso/peregrin';
$url_online = 'lintermediaire.be/peregrin';
$site_version = 1.2;
$possible_langage = array('fr', 'nl');

$trad['fr_home'] = "accueil";
$trad['nl_home'] = "welkom";

$site_title = "Peregrin";
$site_content = "Mon template PHP de base";
$site_author = "lintermediaire.be";

include_once ('log_error.php');

/* SERVICES GOOGLE */
if($_SERVER['SERVER_NAME'] === 'localhost') {
  $gmap_key = "xxx";
  $gcaptcja_siteKey = 'xxx';
}
else {
  $gmap_key = 'xxx';
  $gcaptcja_siteKey = 'xxx';
}

function peregrin_ucfirst($input) {
  $lowercaseString = strtolower($input);
  $transformedString = ucfirst($lowercaseString);
  return $transformedString;
}

function peregrin_authBasic($username,$password) {
  return 'Authorization: Basic ' . base64_encode($username . ':' . $password);
}


function runBalisesOgg($site_title,$site_content,$url_online, $lang) {
  $result = '
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="apple-mobile-web-app-title" content="'.$site_title.'">
  
  <meta property="og:title" content="'.$site_title.'" />
  <meta property="og:description" content="'.$site_content.'" />
  <meta property="og:image" content="seo/share.png" />
  <meta property="og:url" content="'.$url_online.'" />
  <meta property="og:type" content="website">
  <meta property="og:locale" content="'.$lang.'" />
  
  <meta name="twitter:title" content="'.$site_title.'" />
  <meta name="twitter:description" content="'.$site_content.'" />
  <meta name="twitter:image" content="seo/share.png" />
  <meta name="twitter:url" content="'.$url_online.'" />
  
  <meta property="og:title" content="'.$site_title.'" />
  <meta property="og:description" content="'.$site_content.'" />
  <meta property="og:image" content="seo/share.png" />
  <meta property="og:url" content="'.$url_online.'" />
  ';
  return $result;
}

/* run favicons on : https://realfavicongenerator.net/ */
function runFavicons() {
  $favicons = <<<HTML
  <link rel="icon" type="image/png" href="seo/favicons/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/svg+xml" href="seo/favicons/favicon.svg" />
  <link rel="shortcut icon" href="seo/favicons/favicon.ico" />
  <link rel="apple-touch-icon" sizes="180x180" href="seo/favicons/apple-touch-icon.png" />
  <link rel="manifest" href="seo/favicons/site.webmanifest" />
  HTML;
  
  return $favicons;
}