<?php

use Core\App;
use Core\Database;
use Core\Validator;

$currentUserId = 1;

$db = App::resolve(Database::class);

$note = $db->query("select * from notes where  id = :id", ['id' => $_POST['id']])->findOrFail();

if (!$note) {
    abort();
    exit;
}

autorize($note['user_id'] == $currentUserId);

$errors = [];

$validator = new Validator();

if (!Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = "Note body cannot be empty or longer than 1,000 characters.";
}

if (count($errors)) {
    return view('notes/edit', [
        'errors' => $errors,
        'heading' => 'Edit Note',
        'note' => $note
    ]);
}

if (empty($errors)) {
    $db->query("UPDATE `notes` SET `body` = :body WHERE `id` = :id AND `user_id` = :user_id;", [
        'body' => $_POST['body'],
        'id' => $_POST['id'],
        'user_id' => $currentUserId
    ]);

    header('Location: /note?id=' . $_POST['id']);
    exit();
}


header('Location: /note?id=' . $_POST['id']);
exit();

view('notes/update', [
    'heading' => 'Note Detail',
    'note' => $note
]);
