<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>demo</title>
</head>
<body>
    
    <!-- <?php
    $books = [
        "Atomic habits" ,
        "Rich Dad Poor Dad" ,
        "Think and grow rich" 
    ];
    ?>

    <h1><?= $books[1] ?></h1> -->

    <?php
    $books = [
        [
        'name' => "Atomic habits" ,
         'author' => "James Clear",
         'release_date' => '2018',
          'link' => 'https://jamesclear.com/atomic-habits'
        ],
        [
        'name' => "Rich Dad Poor Dad" , 
        'author' => "Robert Kiyosaki", 
        'release_date' => '2000',
         'link' => 'https://richdad.com/'
        ],
        [
        'name' => "Think and grow rich" , 
        'author' => "Napoleon Hill", 
        'release_date' => '1937',
         'link' => 'https://www.amazon.in/Think-Grow-Rich-Landmark-Bestseller/dp/1585424331'
        ]
    ];
    ?>


    <!-- <ul>
        <?php foreach ($books as $book) : ?>
            
        <li>
            <a href="<?= $book['link'] ?>"><?= $book['name'] ?> by <?= $book['author'] ?></a>
            <p>Released on: <?= $book['release_date'] ?></p>
        </li>
        
        <?php endforeach; ?>
    </ul> -->

     <ul>
        <?php foreach ($books as $book) : ?>
        <li><?= $book['name'] ?> by <?= $book['author'] ?>
        <a href="<?= $book['link'] ?>">Read more</a></li>
        <?php endforeach; ?>
    </ul>  






</body>
</html>