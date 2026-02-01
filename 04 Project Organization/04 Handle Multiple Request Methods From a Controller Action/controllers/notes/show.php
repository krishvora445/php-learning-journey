<?php

use Core\Database;


$currentUserId = 1; // this would be fetched from the auth system in real world app


$config = require base_path('config.php');

$db = new Database($config['database']);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // dd($_POST);

    $note = $db->query("select * from notes where  id = :id", ['id' => $_GET['id']])->findOrFail();


    if (!$note) {
        abort();
        exit;
    }


    autorize($note['user_id'] == $currentUserId);
    // Handle the delete request
    $db->query("delete from notes where id = :id", [
        'id' => $_GET['id']
    ]);

    header('Location: /notes');
    exit;

} else {
    // Handle the show request


    $note = $db->query("select * from notes where  id = :id", ['id' => $_GET['id']])->findOrFail();


    if (!$note) {
        abort();
        exit;
    }


    autorize($note['user_id'] == $currentUserId);


    // my logic to fetch a single note by its id

    // $notes = $db->query("select * from notes where user_id = 1")->fetchAll();


    // include 'views/notes/show.view.php';
    view('notes/show', [
        'heading' => 'Note Detail',
        'note' => $note
    ]);
}
