# Separate PHP Logic From the Template

This lesson teaches the "Separation of Concerns" principle by separating PHP data processing logic from the HTML presentation.

## Evolution of Structure

### 1. The "Good Way" (Mixed but Organized)
In the `good way` folder, the code is structured so that PHP logic (data definition, filtering) is at the top of the file, and HTML is at the bottom. This prevents scattering PHP logic throughout the HTML.

### 2. The "Best Way" (Full Separation)
In the `best way` folder, the logic and view are separated into two files:
- **`index.php`**: Contains the "business logic" (data fetching, filtering). It concludes by including the view.
- **`index.view.php`**: Contains only the HTML and simple PHP tags for outputting data (`foreach`, `echo`).

## Key Syntax
- **`require` / `include`**: Used to import the content of another file (the view) into the current file (the logic script).

## Code Example
**index.php (Logic):**
```php
$books = [ ... ];
$filteredBooks = array_filter($books, ...);
require 'index.view.php';
```

**index.view.php (Presentation):**
```html
<ul>
    <?php foreach ($filteredBooks as $book) : ?>
        <li><?= $book['name'] ?></li>
    <?php endforeach; ?>
</ul>
```
