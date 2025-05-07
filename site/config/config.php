<?php

return [
    'kql' => [
        'auth' => false
    ],
    'routes' => [
        [
            'pattern' => '(:all)',
            'method' => 'OPTIONS',
            'action'  => function () {
                header("Access-Control-Allow-Origin: http://localhost:3001");
                header("Access-Control-Allow-Headers: Content-Type, Authorization");
                header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
            }
        ],
        [
            'pattern' => '/',
            'action'  => function () {
                return go('panel');
            }
        ]
    ],
];
