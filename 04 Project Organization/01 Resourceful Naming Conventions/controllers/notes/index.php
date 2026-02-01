<?php

$heading = 'My Notes';



$config = require 'config.php';

$db = new database($config['database']);

$notes = $db->query("select * from notes where user_id = 1")->get();

// dd($notes);




include 'views/notes/index.view.php';  