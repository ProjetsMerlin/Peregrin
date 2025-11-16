<?php

$routes["fr"] = array(
    '' => 'home',
    'accueil' => 'home',
    'blog' => 'blog',
    '404' => '404'
);

$routes["nl"] = array(
    '' => 'home',
    'welkom' => 'home',
    'posts' => 'blog',
    '404' => '404'
);

$priority['fr'] = array(
    '' => '1',
    'home' => '1',
    'blog' => '5',
    '404' => '10'
);

$priority["nl"] = array(
    '' => '1',
    'home' => '1',
    'blog' => '5',
    '404' => '10'
);

$lastmod['fr'] = array(
    '' => '2025-11-16T22:38:15',
    'home' => '2025-11-16T22:38:15',
    'blog' => '2025-11-16T22:38:15',
    '404' => '2025-11-16T22:38:15',
);

$lastmod["nl"] = array(
    '' => '2025-11-16T22:38:15',
    'home' => '2025-11-16T22:38:15',
    'blog' => '2025-11-16T22:38:15',
    '404' => '2025-11-16T22:38:15',
);
