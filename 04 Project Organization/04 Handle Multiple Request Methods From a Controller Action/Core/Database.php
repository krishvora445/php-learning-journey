<?php

// Connect to the database and extract a query.

namespace Core;

use PDO;

class Database
{
    public $connection;

    public $statement;

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


        $this->statement = $this->connection->prepare($query);

        $this->statement->execute($params);

        // return $this->statement->fetchAll(PDO::FETCH_ASSOC);
        // return $this->statement->fetch(PDO::FETCH_ASSOC); // fetch single record
        return $this;// fetch single record
    }

    public function get(){
        return $this->statement->fetchAll();
    }

    public function find() {
        return $this->statement->fetch(PDO::FETCH_ASSOC);
    }

    // public function findOrFail() {
    //     $record = $this->statement->fetch(PDO::FETCH_ASSOC);
    //     if (!$record) {
    //         return false;
    //     }
    //     return $record;/

    public function findOrFail() {
        $result = $this->find();
        if (!$result) {
            abort();
        }
        return $result;
}

}

// $db = new database();

// $posts = $db->query("select * from posts")->fetchAll(PDO::FETCH_ASSOC);
// $post = $db->query("select * from posts where id = 1")->fetch(PDO::FETCH_ASSOC);

// dd($posts);






// foreach ($posts as $post) {
//     echo "<li>" . $post['title'] . '</li>';
// }