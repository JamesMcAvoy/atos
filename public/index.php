<?php

use Philo\Blade\Blade;

require '../vendor/autoload.php';
require '../app/Api.php';

$views = __DIR__ . '/../app/views';
$cache = __DIR__ . '/../app/cache';

echo Api::twitter(); exit;

$blade = new Blade($views, $cache);
echo $blade->view()->make('index')->render();
