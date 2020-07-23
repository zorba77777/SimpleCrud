<?php

/**
 * Реализуется паттерн Single entry point.
 * Все запросы к сайту должны быть перенаправлены на файл index.php, находящийся в корне сайта. Для этого необходимо
 * изменить настройки сервера
 */

ini_set('display_errors', 1);
ini_set('error_reporting', 2047);

use core\App;

require __DIR__ . '/config/autoload.php';
require __DIR__ . '/config/config.php';
$app = new App();
$app->configure($config);
$app->run();
