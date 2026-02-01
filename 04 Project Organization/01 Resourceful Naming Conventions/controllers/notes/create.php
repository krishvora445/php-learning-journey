<?php



require 'Validator.php';


$config = require 'config.php';

$db = new database($config['database']);

$heading = 'Create Note';


// dd(Validator::email('vaora68687@gmail.com'));

// if(!Validator::email('SIHOIASIHDIASY89789hjkkl')) {
//     dd("Not a valid email");
// } else {
//     dd("Valid email");
// }

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

    $validator = new Validator();


    if(!Validator::string($_POST['body'], 1, 1000)) {
        $errors['body'] = "Note body cannot be empty or longer than 1,000 characters.";
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


include 'views/notes/create.view.php';  