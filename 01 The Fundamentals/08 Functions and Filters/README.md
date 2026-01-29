# Functions and Filters

This lesson explains how to define and use functions to encapsulate logic, specifically for filtering data.

## Key Concepts
- **Function Definition**: Functions are defined using the `function` keyword.
- **Parameters**: Functions can accept arguments (e.g., `$books`, `$authorname`).
- **Return Values**: Functions return data using the `return` keyword.
- **Filtering Logic**: The example demonstrates creating a function `filterByAuthor` to create a new array containing only books by a specific author.

## Code Example
```php
function filterByAuthor($books, $authorname) {
    $filteredBooks = [];
    foreach ($books as $book) {
        if ($book['author'] === $authorname) {
            $filteredBooks[] = $book;
        }
    }
    return $filteredBooks;
}

// Usage
$myBooks = filterByAuthor($books, 'James Clear');
```
