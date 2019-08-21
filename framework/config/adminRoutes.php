<?php

return array( 'GET' =>

    [
        'access' => [ 'path' => '/',
            ['controller' => 'authentification', 'method' => 'access']],
        'login' => [ 'path' => '/login',
            ['controller' => 'authentification', 'method' => 'formLogin']],
        'register' => [ 'path' => '/register',
            ['controller' => 'authentification', 'method' => 'formRegister']],
        'deconnexion' => [ 'path' => '/deconnexion',
            ['controller' => 'authentification', 'method' => 'deconnexion']],

        'Dashboard' => [ 'path' => '/dashboard',
            ['controller' => 'dashboard', 'method' => 'dashboard']],

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
        'billet-to-delete-from-billet' => [ 'path' => '/billettodelete-type-id',
            ['controller' => 'DeleteBillet', 'method' => 'deleteBilletValidation']],
        'billet-to-delete-from-trashbillet' => [ 'path' => '/trashbillettodelete-type-id',
            ['controller' => 'DeleteBillet', 'method' => 'deleteBilletValidation']],
        'billet-to-update' => [ 'path' => '/update-type-id',
            ['controller' => 'EditBillet', 'method' => 'billetForm']],

        'billet-to-restore' => [ 'path' => '/restore-type-id',
            ['controller' => 'DeleteBillet', 'method' => 'deleteBilletValidation']],

        'comments' => [ 'path' => '/comments',
            ['controller' => 'comments', 'method' => 'listComments']],

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

        'typeCom' => ['path' => 'comments',
            ['controller' => 'billet', 'method' => 'selectTheType']],
        'typeComId' => ['path' => 'comments-type-id',
            ['controller' => 'billet', 'method' => 'selectTheType']],

        'create-Billet' => ['path' => 'add-billet',
            ['controller' => 'EditBillet', 'method' => 'checkBillet']],
        'Update-Billet' => ['path' => 'update-type-id',
            ['controller' => 'EditBillet', 'method' => 'checkBillet']],

        'delete-billet-to-billet' => [ 'path' => '/billettodelete-type-id',
            ['controller' => 'DeleteBillet', 'method' => 'deleteBillet']],
        'delete-billet-to-trashbillet' => [ 'path' => '/trashbillettodelete-type-id',
            ['controller' => 'DeleteBillet', 'method' => 'deleteBillet']],
        'restore-billet' => [ 'path' => '/restore-type-id',
            ['controller' => 'DeleteBillet', 'method' => 'deleteBillet']],

        'check-com' => [ 'path' => '/checkCom-type-postId-id',
            ['controller' => 'comments', 'method' => 'checkCom']],
    ]
);