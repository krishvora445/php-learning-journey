# Conditionals and Booleans

This lesson covers how to control code execution flow using conditionals and boolean logic.

## Key Concepts
- **Booleans**: Variables can store `true` or `false` values.
- **If/Else Statements**: Used to execute different blocks of code based on a condition (`if ($condition) { ... } else { ... }`).
- **Short Echo Tag**: `<?= ... ?>` is a shorthand for `<?php echo ...; ?>`.
- **String Handling in Logic**: Constructing messages dynamically based on conditions.

## Code Example
```php
$book = "Build An Epic Career";
$read = true;

if ($read) {
    $message = "You have read \"$book\"";
} else {
    $message = "You have not read \"$book\"";
}
?>

<h1>
    <?= $message; ?>
</h1>
```
