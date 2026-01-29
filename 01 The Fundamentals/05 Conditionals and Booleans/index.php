<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>demo</title>
    <style>
        h1 {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
            align-content: center;
        }
    </style>
</head>

<body>
    <!-- <?php
    $book = "Build An Epic Career";
    $read = false;
    ?>


    <h1>
        <?php if ($read) { ?>
        You have read "<?php echo $book; ?>".
        <?php } else { ?>
        You have not read "<?php echo $book; ?>".
        <?php } ?>

    </h1> -->




    <?php
    $book = "Build An Epic Career";
    $read = true;
    $massage="";

    if($read){
      $massage="You have read"." ". '"'.$book.'"'; 
    }else{
        $massage="You have not read"." ". '"'.$book.'"'; 
    }

    ?>


    <h1>
    <!-- <?php echo $massage; ?> -->

    <?= $massage; ?>
    </h1>
</body>

</html>