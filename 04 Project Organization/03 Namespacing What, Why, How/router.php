<?php
function routeToController($uri, $routes) {
    if(array_key_exists($uri, $routes)) {
        require base_path($routes[$uri]);
        // require $routes[$uri];
    } else {
        abort();
    }
}


function abort($code = 404) {
    http_response_code($code);
    $heading = 'Page Not Found';
    include base_path("views/{$code}.view.php");
    exit();
}

$routes = require base_path('Core/routes.php');

// $uri = $_SERVER['REQUEST_URI'];
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// dd($uri);

// dd(parse_url($uri));
routeToController($uri, $routes);