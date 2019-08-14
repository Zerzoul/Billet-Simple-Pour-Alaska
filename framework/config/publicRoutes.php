<?php

return array( 'GET' =>
    ['news' => [ 'path' => '/',
        ['controller' => 'news', 'method' => 'listNewsPost']],
    'new' => ['path' => '/news-id',
        ['controller' => 'news', 'method' => 'newsPost'],
        ['controller' => 'comments', 'method' => 'getComs']],

    'episodes' => ['path' => '/episodes',
        ['controller' => 'episodes', 'method' => 'listChapter']],
    'chapter' => ['path' => '/chapitre-id',
        ['controller' => 'episodes', 'method' => 'chapter']],
        'about' => ['path' => '/about',
            ['controller' => 'about', 'method' => 'getAboutPage']],
    ],


    'POST' => [
        'new' => ['path' => '/new-id',
            ['controller' => 'comments', 'method' => 'addComment']],
    ]
);