<?php

use Core\App;
use Core\Database;

$currentUserId = 1; // this would be fetched from the auth system in real world app


// $config = require base_path('config.php');

// $db = new Database($config['database']);

// $db = App::container()->resolve(Database::class);

$db = App::resolve(Database::class);


// dd($db);


// dd($_POST);

$note = $db->query("select * from notes where  id = :id", ['id' => $_POST['id']])->findOrFail();


if (!$note) {
    abort();
    exit;
}


autorize($note['user_id'] == $currentUserId);
// Handle the delete request
$db->query("delete from notes where id = :id", [
    'id' => $_POST['id']
]);


header('Location: /notes');
exit;
    
