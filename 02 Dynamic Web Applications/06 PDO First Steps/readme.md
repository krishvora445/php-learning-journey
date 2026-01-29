# PDO: Connecting PHP to MySQL

This directory marks the first steps into dynamic data. Instead of hardcoding content in HTML or arrays, we connect to a MySQL database using **PDO (PHP Data Objects)**.

## What is PDO?
PDO is a built-in PHP class that provides a consistent interface for accessing databases. It allows you to write database code that is portable and secure.

## Key Concepts Demonstrated (`index.php`)

1.  **DSN (Data Source Name)**: A string that describes the database connection details.
    ```php
    // host=127.0.0.1; port=3306; dbname=myapp; ...
    $dns = 'mysql:host=127.0.0.1;port=3306;dbname=myapp;user=root;charset=utf8mb4';
    ```
2.  **Creating the Connection**: Instantiating the `PDO` class.
    ```php
    $pdo = new PDO($dns);
    ```
3.  **Preparing & Executing Queries**:
    ```php
    $statement = $pdo->prepare('SELECT * FROM posts');
    $statement->execute();
    ```
4.  **Fetching Data**: retrieving the results as an associative array.
    ```php
    $posts = $statement->fetchAll(PDO::FETCH_ASSOC);
    ```
5.  **Displaying Data**: Loop through the `$posts` array and render them as HTML list items.

## Why this matters
This transforms the website from a static set of pages into a dynamic application that can read meaningful data (like blog posts, user info, etc.) stored in a database.
