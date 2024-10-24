<?php
/* PARAMETERS */
$url_local = 'localhost/peregrin';
$url_online = 'monsite.be';
$possible_langage = array('fr', 'nl');
$site_version = 1.0;

$trad['fr_home'] = "accueil";
$trad['nl_home'] = "welkom";

$site_title = "Peregrin";
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