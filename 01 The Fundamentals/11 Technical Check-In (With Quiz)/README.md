# Technical Check-In

This module verifies the understanding of previous concepts including associative arrays, loops, and logic separation.

## Concepts Reviewed
- **Associative Arrays**: accessing properties like `$business['name']`.
- **Nested Arrays**: Accessing arrays within arrays (e.g., categories within a business).
- **Separation of Concerns**: Keeping logic in `index.php` and presentation in `index.view.php`.

## Code Analysis
The code defines a `$business` array representing a company and displays its details in the view.

```php
$business = [
    'name' => 'krish',
    'cost' => 15,
    'categories' => ['education', 'entertainment']
];
```

The view iterates through the categories:
```php
<?php foreach ($business['categories'] as $category): ?>
    <li><?= $category ?></li>
<?php endforeach; ?>
```
