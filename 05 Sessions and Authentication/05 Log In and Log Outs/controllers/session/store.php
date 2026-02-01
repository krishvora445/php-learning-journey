<?php



use Core\App;
use Core\Database;
use Core\Validator;
use Http\From\LoginForm;

$db = App::resolve(Database::class);


$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';


$errors = [];

if (!Validator::email($email)) {
    $errors['email'] = 'A valid email is required';
}
if (!Validator::string($password)) {
    $errors['password'] = 'A password of at least 8 characters is required';
}

if (!empty($errors)) {
    view('session/create', [
        'errors' => $errors,

    ]);
    exit;
}

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




