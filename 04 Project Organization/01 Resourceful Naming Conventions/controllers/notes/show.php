<?php


$heading = 'Note Page';

$config = require 'config.php';

$db = new database($config['database']);



$note = $db->query("select * from notes where  id = :id", ['id' => $_GET['id']])->findOrFail();


 if (!$note) {
    abort();
    exit;
}

$currentUserId = 1; // this would be fetched from the auth system in real world app

autorize($note['user_id'] == $currentUserId);




// my logic to fetch a single note by its id

// $notes = $db->query("select * from notes where user_id = 1")->fetchAll();





include 'views/notes/show.view.php';  