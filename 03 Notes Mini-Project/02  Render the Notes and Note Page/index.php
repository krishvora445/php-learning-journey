<?php 

require 'functions.php';

require 'database.php';
require 'router.php';





// $id = $_GET['id'];

// // $query = "select * from posts where id = {$id}"; // vulnerable to SQL Injection

// // $query = "select * from posts where id = " . intval($id); // safer way to prevent SQL Injection

// // $query = "select * from posts where id = ?"; // using prepared statements to prevent SQL Injection

// $query = "select * from posts where id = :id"; // using prepared statements to prevent SQL Injection



// // dd($query);

// $posts = $db->query($query, [':id' => $id])->fetch();

// dd($posts);



