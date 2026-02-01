<?php

namespace Core;




use Core\Middleware\Auth;
use Core\Middleware\Guest;
use Core\Middleware\Middleware;

class Router
{
    protected $routes = [];

    public function add($uri, $method, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'method' => $method,
            'controller' => $controller,
            'middleware' => null
        ];
        return $this;
    }

    public function get($uri, $controller)
    {
        return $this->add($uri, 'GET', $controller);
    }

    public function post($uri, $controller)
    {
        return $this->add($uri, 'POST', $controller);
    }

    public function delete($uri, $controller)
    {
        return $this->add($uri, 'DELETE', $controller);
    }

    public function patch($uri, $controller)
    {
        return $this->add($uri, 'PATCH', $controller);
    }

    public function put($uri, $controller)
    {
        return $this->add($uri, 'PUT', $controller);
    }

    public function only($key)
    {
        $this->routes[array_key_last($this->routes)]['middleware'] = $key;

        // dd($this->routes);
        return $this;
    }

    public function route($uri, $method = null)
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
                Middleware::resolve($route['middleware']);

                return require base_path($route['controller']);

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