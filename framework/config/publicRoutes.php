<?php

return array( 'GET' =>
    ['news' => [ 'path' => '/',
        ['controller' => 'news', 'method' => 'listNewsPost']],
    'new' => ['path' => '/news-id',
        ['controller' => 'news', 'method' => 'newsPost']],
    'episodes' => ['path' => '/episodes',
        ['controller' => 'episodes', 'method' => 'listChapter']],
    'chapter' => ['path' => '/chapitre-id',
        ['controller' => 'episodes', 'method' => 'chapter']],
     'about' => ['path' => '/about',
         ['controller' => 'about', 'method' => 'getAboutPage']],
        'connexion' => ['path' => '/connexion',
            ['controller' => 'authentification', 'method' => 'authForm']],
        'inscroption' => ['path' => '/inscription',
            ['controller' => 'register', 'method' => 'registerForm']],
    ],


    'POST' => [
        'report' => ['path' => '/news-id',
            ['controller' => 'comments', 'method' => 'report']],
        'addcomFromNews' => ['path' => '/addcoms-type-id',
            ['controller' => 'comments', 'method' => 'addComment']],
        'addcomFromEpisodes' => ['path' => '/addcoms-type-id',
            ['controller' => 'comments', 'method' => 'addComment']],
    ]
);