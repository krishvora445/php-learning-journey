# Arrays

This lesson introduces arrays for storing lists of items and how to iterate over them.

## Key Concepts
- **Array Creation**: Arrays can be defined using the `array()` function or the short syntax `[]`.
- **Indexed Arrays**: Simple lists of values.
- **Foreach Loop**: A control structure to loop through each item in an array.
- **Alternative Syntax**: `foreach (...): ... endforeach;` for cleaner usage in templates.

## Code Example
```php
$books = [
    "Atomic habits",
    "Rich Dad Poor Dad",
    "Think and grow rich"
];
?>

<ul>
    <?php foreach ($books as $book) : ?>
        <li><?= $book ?></li>
    <?php endforeach; ?>
</ul>
```
*Note: The file also briefly previews associative arrays, mapping books to authors.*
