<?php
require_once('../config.php');
require_once('../rewriting.php');

header('Content-Type: application/xml; charset=utf-8');

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

foreach ($possible_langage as $lang) {
    foreach ($routes[$lang] as $key => $page) {
        echo " <url>\n";
        echo " <loc>https://" . $domain . "/" . $lang . "/" . htmlspecialchars($key) . "</loc>\n";
        echo " <lastmod>" . htmlspecialchars($lastmod[$lang][$page]) . "</lastmod>\n";
        echo " <priority>" . htmlspecialchars($priority[$lang][$page]) . "</priority>\n";
        echo " </url>\n";
    }
}

echo '</urlset>';
exit;
