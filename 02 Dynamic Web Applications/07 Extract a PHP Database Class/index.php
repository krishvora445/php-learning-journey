<?php 

require 'functions.php';


require 'database.php';

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

$db = new database();
$posts = $db->query("select * from posts")->fetchAll(PDO::FETCH_ASSOC);
