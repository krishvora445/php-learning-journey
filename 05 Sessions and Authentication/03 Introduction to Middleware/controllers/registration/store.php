<?php
// dd('Registration Store');

use Core\App;
use Core\Database;
use Core\Validator;

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

$errors = [];

if (!Validator::email($email)) {
    $errors['email'] = 'A valid email is required';
}
if (!Validator::string($password ?? '', 8, 255)) {
    $errors['password'] = 'A password of at least 8 characters is required';
}

if (!empty($errors)) {
    view('registration/create', [
        'errors' => $errors,

    ]);
    exit;
}

$db =App::resolve(Database::class);


$user = $db->query("select * from users where email = :email", [

    'email' => $email


])->find();


if($user) {
    //then someone with that email already exists and has an account.
    //if yes, redirect to a login page.
//    dd($user['email']);

    $_SESSION['user'] = $user['email'];


    header('Location: /' );
    exit();
}else{
    $db->query("insert into users (email, password) values (:email, :password)", [
        'email' => $email,
        'password' =>$password
    ]);

    $_SESSION['logged_In'] = true;
    $_SESSION['user'] = [
        'email' => $email
        ];

//    dd($_SESSION);
    header('Location: /');
    exit();
}