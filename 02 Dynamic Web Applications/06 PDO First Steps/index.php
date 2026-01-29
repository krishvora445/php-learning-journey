<?php

require 'functions.php';



// require 'router.php';


// class Person {
//     public $name;

//     public $age;

//     public function breathe()
//     {
//         echo "Breathing...". "<br>";
//         echo $this->name . ' is breathing.';
//         return "Inhale... Exhale...";
//     }
// }

// $person = new Person();
// $person->name = "John Doe";
// $person->age = 30;  

// $person->breathe();




$dsn = 'mysql:host=127.0.0.1;port=3306;dbname=myapp;user=root;charset=utf8mb4';

$pdo = new PDO($dsn);

$statement = $pdo->prepare('SELECT * FROM posts');

$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . '</li>';
}



