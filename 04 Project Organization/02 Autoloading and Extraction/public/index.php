<?php 

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . '/Core/functions.php';  

spl_autoload_register(function ($class) {

    // dd($class);
    
    require base_path("Core/{$class}.php");    


});

require base_path('Core/router.php');

// $id = $_GET['id'];

// // $query = "select * from posts where id = {$id}"; // vulnerable to SQL Injection

// // $query = "select * from posts where id = " . intval($id); // safer way to prevent SQL Injection

// // $query = "select * from posts where id = ?"; // using prepared statements to prevent SQL Injection

// $query = "select * from posts where id = :id"; // using prepared statements to prevent SQL Injection



// // dd($query);

// $posts = $db->query($query, [':id' => $id])->fetch();

// dd($posts);



