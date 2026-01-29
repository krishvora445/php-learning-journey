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
$filteredBooks = array_filter($books,function($book){
    return $book['release_date'] < 2000;
});

// include 'index.view.php';

require 'index.view.php';