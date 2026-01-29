# Building a Basic PHP Router

This project demonstrates how to build a custom router in PHP to handle URL mapping to specific controllers. This replaces the default behavior where the URL matches the file system directly (e.g., `/about.php` -> `about.php`).

## The Problem
By default, websites mapped directly to files (`about.php`) are rigid. We want clean URLs (e.g., `/about`) and a single entry point to control the flow of our application.

## The Solution: A Router
The `router.php` file acts as the traffic cop. It checks the incoming URL request and decides which code to run.

### Key Concepts Implemented

1.  **Single Entry Point**: All logic starts here (included via `index.php`).
2.  **`parse_url()`**: used to separate the request path from query strings.
    ```php
    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
    ```
3.  **Routes Configuration**: An associative array maps URL paths to controller files.
    ```php
    $routes = [
        '/' => 'controllers/index.php',
        '/about' => 'controllers/about.php',
    ];
    ```
4.  **Dynamic Routing Function**: `routeToController($uri, $routes)` checks if the URI exists in the routes array and loads the corresponding file.
5.  **Handling Errors (404)**: The `abort()` function handles cases where no matching route is found, serving a custom 404 view and setting the correct HTTP response code.

## Evolution of the Code
The `router.php` file shows the progression of learning:
-   **Step 1**: Nested `if/elseif` statements (commented out).
-   **Step 2**: A `switch` statement (commented out).
-   **Step 3**: The final, clean approach using a `$routes` array and a lookup function.
