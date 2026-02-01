<?php

use Core\Database;
use Core\Validator;


$config = require base_path('config.php');

$db = new  Database($config['database']);

$errors = [];

$validator = new Validator();

if (!Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = "Note body cannot be empty or longer than 1,000 characters.";
}

if (!empty($errors)) {
    return view('notes/create', [
        'errors' => $errors ?? [],
        'heading' => 'Create Note'
    ]);
}


if (empty($errors)) {
    $db->query("INSERT INTO `notes` (`body`, `user_id`) VALUES
    (:body, :user_id);", [
        'body' => $_POST['body'],
        'user_id' => 1
    ]);

    header('Location: /notes');
    exit();
} 


