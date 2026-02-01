<?php

use Core\App;
use Core\Container;
use Core\Database;

$Container = new Container();

$Container->bind('Core\Database', function () {
    $config = require base_path('config.php');
    return new Core\Database($config['database']);
});

App::setContainer($Container);