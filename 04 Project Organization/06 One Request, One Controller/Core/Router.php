<?php

namespace Core;

class Router
{
    protected $routes = [];


    public function add($uri, $method, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'method' => $method,
            'controller' => $controller
        ];

        // $this->routes[] = compact('uri', 'method', 'controller');
    }

   

    public function get($uri, $controller)
    {
        $this->add($uri, 'GET', $controller);
    }

    public function post($uri, $controller)
    {
        $this->add($uri, 'POST', $controller);
    }

    public function delete($uri, $controller)
    {
        $this->add($uri, 'DELETE', $controller);
    }

    public function patch($uri, $controller)
    {
        $this->add($uri, 'PATCH', $controller);
    }

    public function put($uri, $controller)
    {
        $this->add($uri, 'PUT', $controller);
    }

    public function route($uri, $method = null)
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
                require base_path($route['controller']);
                return;
            }
        }

        $this->abort();
    }
    protected function abort($code = 404)
    {
        http_response_code($code);
        $heading = 'Page Not Found';
        include base_path("views/{$code}.view.php");
        exit();
    }


    // public function resolve($uri, $method)
    // {
    //     foreach ($this->routes as $route) {
    //         if ($route['uri'] === $uri && $route['method'] === $method) {
    //             require base_path($route['controller']);
    //             return;
    //         }
    //     }
    //     $response = new Response();
    //     abort($response::Not_Found);
    // }
}

// function routeToController($uri, $routes) {
//     if(array_key_exists($uri, $routes)) {
//         require base_path($routes[$uri]);
//         // require $routes[$uri];
//     } else {
//         abort();
//     }
// }


// function abort($code = 404) {
//     http_response_code($code);
//     $heading = 'Page Not Found';
//     include base_path("views/{$code}.view.php");
//     exit();
// }

// $routes = require base_path('Core/routes.php');

// // $uri = $_SERVER['REQUEST_URI'];
// $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// // dd($uri);

// // dd(parse_url($uri));
// routeToController($uri, $routes);