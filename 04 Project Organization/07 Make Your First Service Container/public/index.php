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

require base_path('bootstrap.php');

$router = new Core\Router();


$routes = require base_path('routes.php');

// $uri = $_SERVER['REQUEST_URI'];
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// dd($uri);

// dd(parse_url($uri));
// routeToController($uri, $routes);

$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);

    