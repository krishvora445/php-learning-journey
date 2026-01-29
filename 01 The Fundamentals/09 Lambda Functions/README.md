# Lambda Functions

This lesson introduces Lambda functions (also known as anonymous functions) and how to pass them as arguments to other functions.

## Key Concepts
- **Anonymous Functions**: Functions that do not have a name and can be assigned to variables.
- **Higher-Order Functions**: Functions that accept other functions as parameters (e.g., `filter($items, $fn)`).
- **`array_filter`**: A built-in PHP function that filters elements of an array using a callback function.

## Code Example
```php
// Using array_filter with an anonymous function
$filteredBooks = array_filter($books, function($book) {
    return $book['release_date'] < 2000;
});
```
