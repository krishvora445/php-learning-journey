<?php

use Core\Response;
use Core\Session;

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function urlIs($value) {
    return $_SERVER['REQUEST_URI'] === $value; 
};

function abort($code = 404)
{
    http_response_code($code);

    require base_path("views/{$code}.view.php");

    die();
}


function autorize($condition, $statusCode = Response::Forbidden) {
    if (!$condition) {
        abort($statusCode);
    }
}

function base_path($path) {
    return BASE_PATH . '/' . $path;
}

function view($view, $data = []) {
    extract($data);

    return require base_path("views/{$view}.view.php");
}

function redirect($path)
{
    header("location: {$path}");
    exit();
}

function old($key,$default = '') {
       return Session::get('old')[$key] ?? $default;
}