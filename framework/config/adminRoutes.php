<?php

return array( 'GET' =>

    [
        'dashboard' => [ 'path' => '/',
            ['controller' => 'authentification', 'method' => 'access']],
        'login' => [ 'path' => '/login',
            ['controller' => 'authentification', 'method' => 'formLogin']],
        'register' => [ 'path' => '/register',
            ['controller' => 'authentification', 'method' => 'formRegister']],
        'deconnexion' => [ 'path' => '/deconnexion',
            ['controller' => 'authentification', 'method' => 'deconnexion']],
//        'news' => [ 'path' => '/',
//        ['controller' => 'news', 'method' => 'listNewsPost']],
//
//        'new' => ['path' => '/new-id',
//            ['controller' => 'news', 'method' => 'newsPost'],
//            ['controller' => 'comments', 'method' => 'getComs']],
//
//        'episodes' => ['path' => '/episodes',
//            ['controller' => 'episodes', 'method' => 'listChapter']],
//
//        'chapter' => ['path' => '/chapter-id',
//            ['controller' => 'chapter', 'method' => '']]
    ],

    'POST' => [
        'new' => ['path' => 'login',
            ['controller' => 'authentification', 'method' => 'authValidator']],
    ]
);