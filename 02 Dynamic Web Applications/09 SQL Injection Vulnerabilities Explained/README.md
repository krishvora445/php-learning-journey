# SQL Injection Vulnerabilities Explained

This is a **critical** security lesson. We learn why passing user input directly into database queries is dangerous and how to prevent it.

## The Vulnerability: SQL Injection
If we take input from a URL (e.g., `?id=1`) and paste it directly into a SQL string:
```php
$id = $_GET['id'];
$query = "SELECT * FROM posts WHERE id = $id"; // DANGEROUS!
```
A malicious user could manipulate the URL to execute arbitrary SQL commands (e.g., `?id=1 OR 1=1`), potentially leaking or destroying data.

## The Solution: Prepared Statements
We **must** separate the SQL structure from the data. We do this using **Prepared Statements** in PDO.

### Implementation
1.  **Placeholders**: We use `?` or named parameters (`:id`) in our SQL query instead of the variable.
    ```php
    $query = "SELECT * FROM posts WHERE id = :id";
    ```
2.  **Execution**: We pass the user input as a separate argument when executing the query.
    ```php
    $db->query($query, [':id' => $_GET['id']]);
    ```

### Changes to `Database.php`
The `query` method is updated to accept an optional `$params` array:
```php
public function query($query, $params = []) {
    $statement = $this->connection->prepare($query);
    $statement->execute($params); // PDO handles escaping automatically
    return $statement;
}
```

By doing this, the database treats the input strictly as data, never as executable code, effectively neutralizing the SQL injection attack.
