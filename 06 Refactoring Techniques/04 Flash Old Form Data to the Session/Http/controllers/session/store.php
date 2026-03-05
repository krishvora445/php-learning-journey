<?php

use Core\Authenticator;
use Http\From\LoginForm;
use Core\Session;

$email = $_POST['email'] ;
$password = $_POST['password'] ;

$form = new LoginForm();

if ($form->validate($email, $password)) {
//    $auth = new Authenticator();

//    if ($auth->attempt($email, $password)) {
//        redirect('/');
//    }
//    or

    if ((new Authenticator)->attempt($email, $password)) {
        redirect('/');
    }
    $form->error('email','No matching account found for that email address and password');
}

//$_SESSION['_flash']['error'] = $form->errors();

Session::flash('errors', $form->errors());
Session::flash('old', [
    'email'=> $_POST['email']
]);

return redirect('/login');


//return view('session/create', [
//    'errors' => $form->errors()
//]);