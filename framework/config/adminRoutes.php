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
            ['controller' => 'billet', 'method' => 'billetManager']],
        'billet' => [ 'path' => '/billet-id',
            ['controller' => 'billet', 'method' => 'billetManager']],

    ],

    'POST' => [
        'new' => ['path' => 'login',
            ['controller' => 'authentification', 'method' => 'authValidator']],
    ]
);