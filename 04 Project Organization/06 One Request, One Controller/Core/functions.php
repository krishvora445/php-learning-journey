<?php

use Core\Response;

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

// dd($_SERVER);
// dd($heading);

// if ($_SERVER['REQUEST_URI'] === '/') {
//     echo 'bg-gray-950/50 text-white';
// } else {
//     echo 'text-gray-300 hover:bg-white/5 hover:text-white';
// }; 

// echo $_SERVER['REQUEST_URI'] === '/' ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white';


function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}

;


function autorize($condition, $statusCode = Response::Forbidden)
{
    if (!$condition) {
        abort($statusCode);
    }
}

function base_path($path)
{
    return BASE_PATH . '/' . $path;
}

function view($view, $data = [])
{
    extract($data);

    return require base_path("views/{$view}.view.php");
}