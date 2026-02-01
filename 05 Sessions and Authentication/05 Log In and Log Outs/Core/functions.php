<?php

use Core\Response;

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

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


function login($user)
{
    $_SESSION['user'] = [
        'email' => $user['email']
    ];

    session_regenerate_id(true);
}


function logout(){

    $_SESSION = [];

    session_destroy();

    $params = session_get_cookie_params();

    setcookie('PHPSESSID','', time() - 3600,$params['path'],$params['domain'],$params['secure'],$params['httponly']);

}