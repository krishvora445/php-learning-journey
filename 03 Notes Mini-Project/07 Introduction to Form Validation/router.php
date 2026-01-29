<?php


$routes = require 'routes.php';

// $uri = $_SERVER['REQUEST_URI'];
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// dd($uri);

// dd(parse_url($uri));

// if ($uri === '/') {
//     require 'controllers/index.php';
// } elseif ($uri  === '/about') {
//     require 'controllers/about.php';
// } elseif ($uri  === '/contact') {
//     require 'controllers/contact.php';
// } elseif ($uri  === '/projects') {
//     require 'controllers/projects.php';
// } elseif ($uri  === '/team') {
//     require 'controllers/team.php';
// } else {
//     http_response_code(404);
//     $heading = 'Page Not Found';
//     include 'views/404.view.php';
// }


// switch ($uri['path']) {
//     case '/':
//         require 'controllers/index.php';
//         break;
//     case '/about':
//         require 'controllers/about.php';
//         break;
//     case '/contact':
//         require 'controllers/contact.php';
//         break;
//     case '/projects':
//         require 'controllers/projects.php';
//         break;
//     case '/team':
//         require 'controllers/team.php';
//         break;
//     default:
//         http_response_code(404);
//         $heading = 'Page Not Found';
//         include 'views/404.view.php';
//         break; 
// }

// $routes = [
//     '/' => 'controllers/index.php',
//     '/about' => 'controllers/about.php',
//     '/notes' => 'controllers/notes.php',
//     '/create' => 'controllers/create.php',
//     '/note' => 'controllers/note.php',
//     '/contact' => 'controllers/contact.php',
//     '/projects' => 'controllers/projects.php',
//     '/team' => 'controllers/team.php',
// ];


// if (array_key_exists($uri['path'], $routes)) {
//     require $routes[$uri['path']];
// } else {
//     http_response_code(404);
//     $heading = 'Page Not Found';
//     include 'views/404.view.php';
// }

// function abort() {
//     http_response_code(404);
//     $heading = 'Page Not Found';
//     include 'views/404.view.php';
//     exit();
//     die();
// }


function routeToController($uri, $routes) {
    if(array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}


function abort($code = 404) {
    http_response_code($code);
    $heading = 'Page Not Found';
    include "views/{$code}.view.php";
    exit();
}

routeToController($uri, $routes);