<?php

/**
 * Задаются конфигурационные настройки приложения
 */

$config = [
    'dataBaseSettings' => [
        'host' => 'localhost',
        'userName' => 'root',
        'password' => '123456',
        'dbName' => 'crud',
        'charset' => 'utf8mb4'
    ],

    'startPageParam' => [
        'controller' => 'controllers\MainController',
        'action' => 'index'
    ]
];