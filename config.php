<?php

return [
    'production' => false,
    'baseUrl' => 'http://localhost:3000/',
    'title' => 'Ed',
    'description' => 'My Portfolio Website',
    'collections' => [
        'posts' => [
            'path' => 'blog/{filename}',
            'author' => 'Edrick',
        ],
    ],
];
