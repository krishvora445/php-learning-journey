# Associative Arrays

This lesson dives deeper into arrays, specifically associative arrays where keys are named strings rather than numeric indices.

## Key Concepts
- **Key-Value Pairs**: Associative arrays store data in key-value pairs (`'key' => 'value'`).
- **Multidimensional Arrays**: You can create arrays of arrays. In this example, `$books` is a list of associative arrays, each representing a book's object-like structure.
- **Accessing Values**: Values are accessed using their key (e.g., `$book['name']`).

## Code Example
```php
$books = [
    [
        'name' => "Atomic habits",
        'author' => "James Clear",
        'release_date' => '2018',
        'link' => 'https://jamesclear.com/atomic-habits'
    ],
    // ...
];

foreach ($books as $book) {
    echo $book['name']; // Accessing by key
}
```
