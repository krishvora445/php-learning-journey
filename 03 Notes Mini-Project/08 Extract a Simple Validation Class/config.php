<?php
        return [
            'database' =>[
            'host' => 'localhost',
            'port' => '3306',
            'dbname' => 'myapp',   
            'charset' => 'utf8mb4'
        ],

        // other configurations can go here

        'services' => [
            'prerender' => [
                'enabled' => false,
                'token' => null,
                'secret' => null
            ]
        ]
        ];