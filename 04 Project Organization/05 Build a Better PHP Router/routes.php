<?php

// return [
//     '/' => 'controllers/index.php',
//     '/about' => 'controllers/about.php', 
//     '/notes' => 'controllers/notes/index.php',
//     '/notes/create' => 'controllers/notes/create.php',
//     '/note' => 'controllers/notes/show.php',
//     '/contact' => 'controllers/contact.php',
//     '/projects' => 'controllers/projects.php',
//     '/team' => 'controllers/team.php',
// ];  

$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');
$router->get('/contact', 'controllers/contact.php');
$router->get('/team', 'controllers/team.php');
$router->get('/projects', 'controllers/projects.php');


$router->get('/notes', 'controllers/notes/index.php');
$router->get('/note', 'controllers/notes/show.php');
$router->delete('/note', 'controllers/notes/show.php');  // For deleting a note
$router->get('/notes/create', 'controllers/notes/create.php');
$router->post('/notes/create', 'controllers/notes/create.php');  // For creating a note


