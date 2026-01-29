# PHP Partials

This project demonstrates the use of **partials** in PHP to organize code and improve maintainability.

## What are Partials?

Partials are small, reusable code snippets (usually containing HTML and PHP) that can be included in multiple pages. Instead of copying and pasting the same code (like headers, navigation bars, and footers) into every single file, you define them once in a separate file and "include" them wherever needed.

## Why do we need them?

1.  **DRY (Don't Repeat Yourself)**: Avoids code duplication.
2.  **Maintainability**: If you need to change the navigation menu or the footer, you only have to edit one file (`nav.php` or `footer.php`), and the changes instantly reflect across all your pages.
3.  **Organization**: Keeps your main page logic clean by separating layout elements (like `<head>` tags) from specific page content.

## How it works

In PHP, we use the `require` or `include` statements to insert the content of one file into another.

### Project Structure
-   **Logic Files** (e.g., `index.php`, `about.php`): These handle the data logic (like setting `$heading`) and then load the specific view.
-   **Views** (`/views`): Contain the main HTML structure for a specific page.
-   **Partials** (`/views/partials`): Contain the reusable chunks like `head.php`, `nav.php`, `banner.php`, and `footer.php`.

### Example

**Logic (index.php):**
```php
<?php
$heading = 'Home Page';
include 'views/index.view.php';
```

**View (views/index.view.php):**
```php
<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>

<main>
    <h1>Welcome Home</h1>
</main>

<?php require('partials/footer.php') ?>
```

When `index.php` is executed, PHP stitches all these files together to send a complete HTML page to the browser.
