<?php

// Connect to the database and extract a query.

class database
{
    public $connection;

    public function __construct()
    {
        $dns = 'mysql:host=127.0.0.1;port=3306;dbname=myapp;user=root;charset=utf8mb4';

        $this->connection = new PDO($dns);
    }
    public function query($query)
    {


        $statement = $this->connection->prepare($query);

        $statement->execute();

        // return $statement->fetchAll(PDO::FETCH_ASSOC);
        // return $statement->fetch(PDO::FETCH_ASSOC); // fetch single record
        return $statement;// fetch single record
    }
}

$db = new database();

$posts = $db->query("select * from posts")->fetchAll(PDO::FETCH_ASSOC);
// $post = $db->query("select * from posts where id = 1")->fetch(PDO::FETCH_ASSOC);

dd($posts);






// foreach ($posts as $post) {
//     echo "<li>" . $post['title'] . '</li>';
// }