# Environments and Configuration Flexibility

This episode focuses on removing hardcoded configuration values (like database credentials) from our classes and moving them into a dedicated configuration file.

## The Problem
Hardcoding database credentials inside the `Database` class reduces flexibility. If we move from a local development environment to a production server, we'd have to edit the class code itself.

## The Solution: A `config.php` File
We introduce a `config.php` file that returns an array of configuration settings.

### Key Changes
1.  **`config.php`**:
    ```php
    return [
        'database' => [
            'host' => 'localhost',
            'port' => 3306,
            'dbname' => 'myapp',
            'charset' => 'utf8mb4'
        ],
        // other config...
    ];
    ```
2.  **Loading Config**: In `index.php`, we require the config file:
    ```php
    $config = require 'config.php';
    ```
3.  **Refactoring Database Class**: The constructor now accepts the configuration array. We also helper functions (like `http_build_query`) to dynamically construct the DSN string.
    ```php
    $dsn = 'mysql:' . http_build_query($config['database'], '', ';');
    // Result: mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4
    ```

## Benefit
We can now easily swap configurations or exclude `config.php` from version control systems (git) to keep secrets safe, without touching the application logic.
