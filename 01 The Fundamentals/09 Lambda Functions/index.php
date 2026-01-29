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
        'name' => "Atomic habits 2" ,
         'author' => "James Clear",
         'release_date' => '2028',
          'link' => 'https://jamesclear.com/atomic-habits2'
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
        ],
        [
        'name' => "A Little Life" , 
        'author' => "Hanya Yanagihara", 
        'release_date' => '2013',
         'link' => 'https://www.amazon.in/Little-Life-Hanya-Yanagihara/dp/0804172706'
        ]
    ];
    ?>


   <!-- <?php $filterByAuthor = function ($books,$authorname) {
    $filteredBooks = [];
    foreach ($books as $book) {
        if ($book['author'] === $authorname) {
            $filteredBooks[] = $book;
        }
    }
    return $filteredBooks;
    };

    $filteredBooks = $filterByAuthor($books,'James Clear');
    ?>

    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
        <li><?= $book['name'] ?> by <?= $book['author'] ?>
        <a href="<?= $book['link'] ?>">Read more</a></li>
        <?php endforeach; ?> 
    </ul>  -->

<!-- 
   <?php function filter($items,$key , $value) {
    $filteredItems = [];
    foreach ($items as $item) {
        if ($item[$key] === $value) {
            $filteredItems[] = $item;
        }
    }
    return $filteredItems;
    };
    //  $filteredBooks = filter($books,'author','Hanya Yanagihara');
    // $filteredBooks = filter($books,'author','James Clear');
    $filteredBooks = filter($books,'release_date','2000');
    ?>

      <ul>
        <?php foreach ($filteredBooks as $book) : ?>
        <li><?= $book['name'] ?> by <?= $book['author'] ?>
        <a href="<?= $book['link'] ?>">Read more</a></li>
        <?php endforeach; ?>
    </ul> -->


<!-- 
    
   <?php function filter1($items,$fn) {
    $filteredItems = [];
    foreach ($items as $item) {
        if ($fn($item)) {
            $filteredItems[] = $item;
        }
    }
    return $filteredItems;
    };
     $filteredBooks = filter1($books,function($book){
        return $book['release_date'] < 2000;
    });
    ?>

      <ul>
        <?php foreach ($filteredBooks as $book) : ?>
        <li><?= $book['name'] ?> by <?= $book['author'] ?>
        <a href="<?= $book['link'] ?>">Read more</a></li>
        <?php endforeach; ?>
    </ul> -->
   


   <?php 
     $filteredBooks = array_filter($books,function($book){
        return $book['release_date'] < 2000;
    });
    ?>

      <ul>
        <?php foreach ($filteredBooks as $book) : ?>
        <li><?= $book['name'] ?> by <?= $book['author'] ?>
        <a href="<?= $book['link'] ?>">Read more</a></li>
        <?php endforeach; ?>
    </ul>
 



</body>
</html>