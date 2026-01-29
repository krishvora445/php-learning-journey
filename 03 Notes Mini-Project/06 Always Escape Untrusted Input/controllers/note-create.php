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
    $db->query("INSERT INTO `notes` (`body`, `user_id`) VALUES
    (:body, :user_id);", [
        'body' => $_POST['body'],
        'user_id' => 1
    ]);


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