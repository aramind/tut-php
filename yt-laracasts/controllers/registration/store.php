<?php

use Core\App;
use Core\Database;
use Core\Validator;

$email = $_POST['email'];
$password = $_POST['password'];

// validator form inputs
$errors = [];
if (!Validator::email($email)) {
    $errors['email'] = "Please provide a valid email address.";
}
if (!Validator::string($password, 7, 255)) {
    $errors['password'] = "Please prove a password of at least 7 characters";
}

if (!empty($errors)) {
    return view('registration/create.view.php', ['errors' => $errors]);
}


$db = App::resolve(Database::class);

$user = $db->query('select * from users where email = :email', [
    'email' => $email
])->find();

if ($user) {
    header('location: /tut-php/yt-laracasts/');
    exit();
} else {
    $db->query("INSERT INTO users(email, password) VALUES (:email, :password)", ['email' => $email, 'password' => $password]);

    //mark that the user has logged in
    $_SESSION['user'] = ['email' => $email];

    header('location: /tut-php/yt-laracasts/');
    exit();
}
