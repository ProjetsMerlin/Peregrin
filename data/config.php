<?php
/* PARAMETERS */
$url_local = 'localhost/projets/peregrin';
$url_online = 'monsite.be';
$possible_langage = array('fr', 'nl');
$site_version = 1.0;
$g_tag = '';

$site_title = "Peregrin";
$site_description = "lorem";
$site_author = "Merlin";

$trad["fr_home"] = "accueil";
$trad["nl_home"] = "welkom";

/* SERVICES GOOGLE */
if($_SERVER['SERVER_NAME'] === 'localhost') {
  $gmap_key = "xxx";
  $gcaptcja_siteKey = 'xxx';
}
else {
  $gmap_key = 'xxx';
  $gcaptcja_siteKey = 'xxx';
}