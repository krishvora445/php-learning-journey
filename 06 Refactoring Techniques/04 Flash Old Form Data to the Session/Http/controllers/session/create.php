<?php

//dd($_SESSION);
view('session/create', [
    'errors' => $_SESSION['_flash']['errors'] ?? []
]);