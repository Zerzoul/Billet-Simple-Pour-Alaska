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

        'billets' => [ 'path' => '/billets',
            ['controller' => 'ListBillet', 'method' => 'billetManager']],

        'billet-id' => [ 'path' => '/billet-id',
            ['controller' => 'ListBillet', 'method' => 'getId']],
        'add-billet' => [ 'path' => '/add-billet',
            ['controller' => 'AddBillet', 'method' => 'addBilletForm']],

    ],

    'POST' => [
        'new' => ['path' => 'login',
            ['controller' => 'authentification', 'method' => 'authValidator']],
        'typeBillet' => ['path' => 'billets',
            ['controller' => 'ListBillet', 'method' => 'setType']],
    ]
);