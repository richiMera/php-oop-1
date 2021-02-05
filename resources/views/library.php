<?php

@include __DIR__. "/book.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my-Library</title>
</head>
<body>
    <?php $book1 = new Book("qualcuno con cui correre", "David Grossman")?>;
    <?php $book2 = new Book("delitto e castigo", "Fëdor Dostoevskij") ?>;

    <div class="container">
        <h2>La mia Libreria</h2>
        <div class="books_container">
            <div class="book">
                <h3><?php echo $book1->title ?></h3>
                <span><?php echo $book1->title ?></span>
            </div>
        </div>
    </div>
</body>
</html>