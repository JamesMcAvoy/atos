<?php

require '../vendor/autoload.php';

use Philo\Blade\Blade;
use Goutte\Client;

$views = __DIR__ . '/../app/views';
$cache = __DIR__ . '/../app/cache';

$blade = new Blade($views, $cache);
echo $blade->view()->make('index')->render();
