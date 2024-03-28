<?php
/* PARAMETERS */
$url_local = 'localhost/projets/peregrin';
$url_online = 'monsite.be';
$possible_langage = array('fr', 'nl');
$site_version = 1.1;
$g_tag = '';

$site_title = "Peregrin";
$site_description = "Mon template PHP de base";
$site_author = "Merlin";

$trad[$possible_langage[0]."_home"] = "accueil";
$trad[$possible_langage[1]."_home"] = "welkom";

/* SERVICES GOOGLE */
if($_SERVER['SERVER_NAME'] === 'localhost') {
  $gmap_key = "xxx";
  $gcaptcja_siteKey = 'xxx';
}
else {
  $gmap_key = 'xxx';
  $gcaptcja_siteKey = 'xxx';
}