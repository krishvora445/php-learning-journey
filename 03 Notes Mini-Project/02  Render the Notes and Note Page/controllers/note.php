<?php


$heading = 'Note Page';

$config = require 'config.php';

$db = new database($config['database']);



$note = $db->query("select * from notes where id = :id", ['id' => $_GET['id']])->fetch();


// my logic to fetch a single note by its id

// $notes = $db->query("select * from notes where user_id = 1")->fetchAll();





include 'views/note.view.php';  