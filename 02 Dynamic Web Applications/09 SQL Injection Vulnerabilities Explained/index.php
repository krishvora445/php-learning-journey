<?php 

require 'functions.php';


require 'database.php';


$config = require 'config.php';

$db = new database($config['database']);

$id = $_GET['id'] ?? 1;

// $query = "select * from posts where id = {$id}"; // vulnerable to SQL Injection

// $query = "select * from posts where id = " . intval($id); // safer way to prevent SQL Injection

// $query = "select * from posts where id = ?"; // using prepared statements to prevent SQL Injection

$query = "select * from posts where id = :id"; // using prepared statements to prevent SQL Injection



// dd($query);

$posts = $db->query($query, [':id' => $id])->fetch();

dd($posts);

