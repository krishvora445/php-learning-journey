# Extracting a Database Class

This project refactors the raw PDO code from the previous step into a reusable **Database Class**.

## The Problem with Raw PDO
In the previous step, our `index.php` was cluttered with connection strings and PDO initialization logic. If we wanted to query the database from another file, we'd have to copy-paste that connection code.

## The Solution: A Dedicated Class
We created `Database.php` to encapsulate all database interaction logic.

### Features of the `Database` Class
1.  **Encapsulation**: The `$connection` (the raw PDO object) is stored as a property.
2.  **Constructor**: The `__construct()` method handles the connection setup automatically when a new instance of the class is created.
3.  **Methods**: The `query($sql)` method abstracts the `prepare` and `execute` steps. It returns the statement object, allowing for method chaining (e.g., `->fetchAll()`).

### Usage Example
```php
require 'Database.php';

$db = new Database();
$posts = $db->query("SELECT * FROM posts")->fetchAll(PDO::FETCH_ASSOC);

dd($posts);
```

This cleans up our main application code significantly. We no longer worry about *how* to connect, we just ask the `Database` object to run a query.
