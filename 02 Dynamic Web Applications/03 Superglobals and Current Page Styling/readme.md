# Superglobals and Current Page Styling

This project explores how to determine the "current page" to interpret user context and apply active styling (e.g., highlighting the "Home" link in the navigation bar when the user is on the home page).

## Superglobals

Superglobals are built-in variables in PHP that are always available in all scopes. They start with `$_`.
Common examples include:
-   `$_GET`: Variables passed via URL parameters.
-   `$_POST`: Variables passed via HTTP POST (forms).
-   `$_SERVER`: Information about headers, paths, and script locations.

In this project, we specifically use `$_SERVER['REQUEST_URI']`. This key holds the URI which was given in order to access this page; for instance, if you visit `http://localhost/about.php`, `$_SERVER['REQUEST_URI']` will likely be `/about.php`.

## Project Structure & Approaches

I noticed you have two sub-directories exploring different ways to solve the "Active Link" problem. This is a great way to learn!

### 1. `my way/` (Manual Variable Approach)
In this version, you manually define a variable in each "controller" file before loading the view.
**Example (`index.php`):**
```php
$currentPage = 'home';
include 'views/index.view.php';
```
**View (`nav.php`):**
```php
<a href="/" class="<?= $currentPage === 'home' ? 'bg-gray-900 text-white' : 'text-gray-300' ?>">Home</a>
```
*   **Pros**: Explicit. You know exactly what sets the value.
*   **Cons**: Repetitive. You have to remember to set `$currentPage` in every single new page you create. It mixes UI logic into your controller.

### 2. `laracasts way/` (Superglobal Approach)
In this version, you use the power of `$_SERVER['REQUEST_URI']` to determine the active page dynamically. You also introduced a `functions.php` file for helper functions.

**Helper (`functions.php`):**
```php
function urlIs($value) {
    return $_SERVER['REQUEST_URI'] === $value;
}
```

**View (`nav.php`):**
```php
<a href="/" class="<?= urlIs('/') ? 'bg-gray-900 text-white' : 'text-gray-300' ?>">Home</a>
```

*   **Pros**: DRY (Don't Repeat Yourself). Your controllers (`index.php`, `about.php`) don't need to know anything about highlighting navigation links. They just load the view. The view handles its own presentation logic using the helper.
*   **Cons**: It relies on the URL structure matching your logic (which is usually fine).

## Notable Observation
The transition from "my way" to "laracasts way" represents a shift towards **separation of concerns**. By moving the logic of "what does the UI look like" out of the controller and into the view (supported by a helper function), your code becomes cleaner and easier to scale.
