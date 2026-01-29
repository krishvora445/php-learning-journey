<?php

$heading = 'My Notes';



$config = require 'config.php';

$db = new database($config['database']);

$notes = $db->query("select * from notes where user_id = 1")->fetchAll();

// dd($notes);




include 'views/notes.view.php';  