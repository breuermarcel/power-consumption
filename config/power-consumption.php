<?php

return [
    'name' => 'power-consumption',

    'routing' => [
        'prefix' => 'power-consumption',
        'as' => 'power-consumption.',
        'middleware' => [
            'web',
            'auth',
        ],
    ],
];
