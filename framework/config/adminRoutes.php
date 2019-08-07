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
            ['controller' => 'ListBillet', 'method' => 'listBillet']],
        'billet-type' => [ 'path' => '/billet-type',
            ['controller' => 'ListBillet', 'method' => 'listBillet']],
        'billet-type-id' => [ 'path' => '/billet-type-id',
            ['controller' => 'ListBillet', 'method' => 'listBillet']],

        'trash-billets' => [ 'path' => '/trashbillets',
            ['controller' => 'DeleteBillet', 'method' => 'listTrashBillet']],
        'trash-billets-type' => [ 'path' => '/trashbillets-type',
            ['controller' => 'DeleteBillet', 'method' => 'listTrashBillet']],
        'trash-billets-id' => [ 'path' => '/trashbillets-type-id',
            ['controller' => 'DeleteBillet', 'method' => 'listTrashBillet']],

        'add-billet' => [ 'path' => '/add-billet',
            ['controller' => 'EditBillet', 'method' => 'billetForm']],
        'billet-to-delete' => [ 'path' => '/delete-type-id',
            ['controller' => 'DeleteBillet', 'method' => 'deleteBilletValidation']],
        'billet-to-update' => [ 'path' => '/update-type-id',
            ['controller' => 'EditBillet', 'method' => 'billetForm']],

        'listing-users' => [ 'path' => '/users',
            ['controller' => 'users', 'method' => 'usersManager']],

    ],

    'POST' => [
        'new' => ['path' => 'login',
            ['controller' => 'authentification', 'method' => 'authValidator']],

        'typeBillet' => ['path' => 'billets',
            ['controller' => 'billet', 'method' => 'selectTheType']],
        'typeBilletId' => ['path' => 'billet-type-id',
            ['controller' => 'billet', 'method' => 'selectTheType']],

        'typeTrashBillet' => ['path' => 'trashbillets',
            ['controller' => 'billet', 'method' => 'selectTheType']],
        'typeTrashBilletId' => ['path' => 'trashbillets-type-id',
            ['controller' => 'billet', 'method' => 'selectTheType']],

        'create-Billet' => ['path' => 'add-billet',
            ['controller' => 'EditBillet', 'method' => 'checkBillet']],
        'Update-Billet' => ['path' => 'update-type-id',
            ['controller' => 'EditBillet', 'method' => 'checkBillet']],

        'delete-billet' => [ 'path' => '/delete-type-id',
            ['controller' => 'DeleteBillet', 'method' => 'deleteBillet']],
    ]
);