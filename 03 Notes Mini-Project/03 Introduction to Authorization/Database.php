<?php

// Connect to the database and extract a query.

class database
{
    public $connection;

    public function __construct($config,$username = 'root', $password = '')
    {
       $dns = 'mysql:' . http_build_query($config, '', '; ');

        // $dns = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";

        $this->connection = new PDO($dns, $username, $password, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
          
    }
    public function query($query,$params=[])
    {


        $statement = $this->connection->prepare($query);

        $statement->execute($params);

        // return $statement->fetchAll(PDO::FETCH_ASSOC);
        // return $statement->fetch(PDO::FETCH_ASSOC); // fetch single record
        return $statement;// fetch single record
    }
}

// $db = new database();

// $posts = $db->query("select * from posts")->fetchAll(PDO::FETCH_ASSOC);
// $post = $db->query("select * from posts where id = 1")->fetch(PDO::FETCH_ASSOC);

// dd($posts);






// foreach ($posts as $post) {
//     echo "<li>" . $post['title'] . '</li>';
// }