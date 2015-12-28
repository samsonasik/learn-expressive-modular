<?php

return [
    
    'dependencies' => [
        'factories' => [
            Album\Action\AlbumPageAction::class => Album\Action\AlbumPageFactory::class,
        ],
    ],
    
    'routes' => [
        [
            'name' => 'album',
            'path' => '/album',
            'middleware' => Album\Action\AlbumPageAction::class,
            'allowed_methods' => ['GET'],
        ],
    ],
    
    'templates' => [
        'paths' => [
            'album'    => [ __DIR__ . '/../templates/album'],
        ],
    ],
];