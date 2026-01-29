<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>demo</title>
</head>

<body>

    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
            <li><?= $book['name'] ?> by <?= $book['author'] ?>
                <a href="<?= $book['link'] ?>">Read more</a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>