<?php

use Core\Database;


$config = require base_path('config.php');

$db = new  Database($config['database']);

$notes = $db->query("select * from notes where user_id = 1")->get();

// dd($notes);


// include 'views/notes/index.view.php';
view('notes/index', [
    'heading' => 'My Notes',
    'notes' => $notes
]);