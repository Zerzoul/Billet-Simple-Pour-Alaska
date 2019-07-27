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
        'billet-type' => [ 'path' => '/billet-type',
            ['controller' => 'ListBillet', 'method' => 'billetManager']],
        'billet-type-id' => [ 'path' => '/billet-type-id',
            ['controller' => 'ListBillet', 'method' => 'billetManager']],

        'add-billet' => [ 'path' => '/add-billet',
            ['controller' => 'AddBillet', 'method' => 'billetForm']],

        'billet-delete' => [ 'path' => '/delete-type-id',
            ['controller' => 'ListBillet', 'method' => 'deleteBilletValidation']],

    ],

    'POST' => [
        'new' => ['path' => 'login',
            ['controller' => 'authentification', 'method' => 'authValidator']],

        'typeBillet' => ['path' => 'billets',
            ['controller' => 'ListBillet', 'method' => 'selectTheType']],
        'typeBilletId' => ['path' => 'billet-type-id',
            ['controller' => 'ListBillet', 'method' => 'selectTheType']],


        'addBillet' => ['path' => 'add-billet',
            ['controller' => 'AddBillet', 'method' => 'checkNewBillet']],

        'billet-delete' => [ 'path' => '/delete-type-id',
            ['controller' => 'ListBillet', 'method' => 'deleteBillet']],
    ]
);