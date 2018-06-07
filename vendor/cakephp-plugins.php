<?php
$baseDir = dirname(dirname(__FILE__));
return [
    'plugins' => [
        'Bake' => $baseDir . '/vendor/cakephp/bake/',
        'DebugKit' => $baseDir . '/vendor/cakephp/debug_kit/',
        'Estacoes' => $baseDir . '/plugins/Estacoes/',
        'Migrations' => $baseDir . '/vendor/cakephp/migrations/',
        'PontoSispe' => $baseDir . '/plugins/PontoSispe/',
        'Search' => $baseDir . '/vendor/friendsofcake/search/',
        'TwitterBootstrap' => $baseDir . '/vendor/cakephp-brasil/twitter-bootstrap/',
        'WyriHaximus/TwigView' => $baseDir . '/vendor/wyrihaximus/twig-view/'
    ]
];