
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>demo</title>
</head>
<body>

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