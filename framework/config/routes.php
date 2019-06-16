<?php

return array( 'GET' =>
    ['news' => [ 'path' => '/',
        ['controller' => 'news', 'method' => 'listNewsPost']],
    'new' => ['path' => '/new-id',
        ['controller' => 'news', 'method' => 'newsPost'],
        ['controller' => 'comments', 'method' => 'getComs']],
    'episodes' => ['path' => '/episodes',
        ['controller' => 'episodes', 'method' => 'listChapter']],
    'chapter' => ['path' => '/chapter-id',
        ['controller' => 'chapter', 'method' => '']]],

    'POST' => [
        'new' => ['path' => '/new-id',
            ['controller' => 'comments', 'method' => 'addComment']],
    ]
);