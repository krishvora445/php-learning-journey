<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>demo</title>
    <style>
        body{
            font-family: sans-serif;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <h1>
        Recomanded Books
    </h1>
    <?php
    // $books = array("Atomic habits", "Rich Dad Poor Dad", "Think and grow rich");
    $books =[
        "Atomic habits",
        "Rich Dad Poor Dad",
        "Think and grow rich"
    ];
    ?>
    <ul>
        <!-- <li>Atomic habits</li>
        <li>Rich Dad Poor Dad</li>
        <li>Think and grow rich</li> -->


        <!-- <?php
        foreach ($books as $book) {
           echo "<li>$book</li>";
        } ?>   -->

        <?php
        foreach ($books as $book) : ?>
        <li><?= $book ?></li>
        <?php endforeach; ?>
    </ul>


    <?php
    $books = [
        "Atomic habits" => "James Clear",
        "Rich Dad Poor Dad" => "Robert Kiyosaki",
        "Think and grow rich" => "Napoleon Hill"
    ];
    ?>

    <ul>
        <?php foreach ($books as $book => $author) : ?>
        <li><?= $book ?> by <?= $author ?></li>
        <?php endforeach; ?>
    </ul> 


</body>
</html>