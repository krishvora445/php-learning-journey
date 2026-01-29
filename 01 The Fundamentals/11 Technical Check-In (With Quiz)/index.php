<?php


$businessName = "Leracasts";
$cost = 15; // $15 per month


$business = [
    'name' => 'krish',
    'cost' => 15,
    'categories' => ['education', 'entertainment']  
    
];

// echo $business['name'];

// if ($business['cost'] > 99) {
//     echo 'Not interested';
// }

// foreach ($business['categories'] as $category) {
//     echo $category . '<br>';
// }


// function register($user) {
//     // Create user record
//     // Sign in user
//     // Send welcome email
//     // Redirect to dashboard
// }

require 'index.view.php';