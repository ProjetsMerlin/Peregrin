<?php
require_once('../config.php');

header('Content-Type: text/plain; charset=utf-8');

$robots_html = "User-agent: *\n";
$robots_html .= "Disallow: " . $hide_folder . "\n";
$robots_html .= "\n";
$robots_html .= "Sitemap: ";
$robots_html .= !empty($_SERVER["HTTPS"]) ? "https://" : "http://";
$robots_html .= $domain;
$robots_html .= "/sitemap.xml\n";

echo $robots_html;
