<?php 

require 'functions.php';


require 'database.php';


$config = require 'config.php';

$db = new database($config['database']);

$posts = $db->query("select * from posts")->fetchAll();

dd($posts);

