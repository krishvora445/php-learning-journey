<?php


use Core\App;
use Core\Database;
use Http\From\LoginForm;

$db = App::resolve(Database::class);


$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

$form = new LoginForm();

if (!$form->validate($email, $password)){

        view('session/create', [
            'errors' => $form->errors()

        ]);
        exit;
}


//$errors = [];
//
//if (!Validator::email($email)) {
//    $errors['email'] = 'A valid email is required';
//}
//if (!Validator::string($password)) {
//    $errors['password'] = 'Please provide a valid password ';
//}
//
//if (!empty($errors)) {
//    view('session/create', [
//        'errors' => $errors,
//
//    ]);
//    exit;
//}

$user = $db->query('select * from users where email = :email',[
    'email' => $email
])->find();

//dd($user);
//if (!$user) {
//    view('session/create', [
//        'errors' => ['email' => 'User does not exist']
//    ]);
//    exit;
//}
//
//if(password_verify($password, $user['password'])) {
//    login(['email' => $email]);
//    header('location: /');
//    exit;
//}
//view('session/create', [
//    'errors' => ['email' => 'incorrect password']
//]);
//exit;
if ($user) {
    if(password_verify($password, $user['password'])) {
        login(['email' => $email]);
        header('location: /');
        exit;
    }
}

view('session/create', [
    'errors' => ['email' => 'No matching account found for that email address and password']
]);
exit;




