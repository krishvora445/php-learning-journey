<?php 

const BASE_PATH = __DIR__ . '/..';

require BASE_PATH . '/Core/functions.php';

spl_autoload_register(function ($class) {

    // dd($class);
    // string(13) "Core\Database"

    $calss =str_replace('\\',DIRECTORY_SEPARATOR, $class);

    // dd($result); 

        require base_path("{$class}.php");


});

require base_path('router.php');




