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

}