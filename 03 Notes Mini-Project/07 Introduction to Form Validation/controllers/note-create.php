<?php


$config = require 'config.php';

$db = new database($config['database']);

$heading = 'Create Note';

// dd($_SERVER);



if  ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // dd($_POST);

    // $db->query("insert into notes (user_id, body) values (:user_id, :body)", [
    //     'user_id' => 1,
    //     'body' => $_POST['body']
    // ]); 

    // if (empty($_POST['body'])) {
    //     // Handle the error, e.g., set an error message
    //     $error = "Note body cannot be empty.";
    // } else {

    $errors =[];

    if(strlen($_POST['body']) === 0) {
        // $error = "Note body cannot be empty.";
        $errors['body'] = "Note body cannot be empty.";
    } 

    if(strlen($_POST['body']) > 1000) {
        // $error = "Note body cannot be empty.";
        $errors['body'] = "Note body cannot be longer than 1,000 characters.";
    } 

    if(empty($errors)) {
        $db->query("INSERT INTO `notes` (`body`, `user_id`) VALUES
        (:body, :user_id);", [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);

    } 
    // }   

    // $config = require 'config.php';

    // $db = new database($config['database']);

    // $db->query("insert into notes (user_id, body) values (:user_id, :body)", [
    //     'user_id' => 1,
    //     'body' => $_POST['body']
    // ]);

    // header('Location: /notes');
    // exit();
}


include 'views/note-create.view.php';  