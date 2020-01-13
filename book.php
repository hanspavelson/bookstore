<?php
require_once 'db_connection.php';
$id = $_GET['id'];
$stmt = $pdo->prepare('SELECT * FROM Books.books LEFT JOIN Books.book_authors ON book_id=Books.books.id LEFT JOIN Books.authors ON Books.authors.id = author_id WHERE Books.books.id=:id');
$stmt->execute(['id' => $id]);
$book = $stmt->fetch();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?= $book['title']; ?></title>
    
    
</head>    
<body style="background-color: #D5F5E3;">

<img src="<?php echo $book['cover_path']; ?>" alt="Smiley face" height="250" width="200">
<br>
<h3>Pealkiri: <?php echo $book['title']; ?></h3>
<br>
<h3>Autor: <?php echo $book['first_name']; ?> <?php echo $book['last_name']; ?></h3>

<h3>Väljastamine: <?php echo $book['release_date']; ?> </h3> 

<h3>Keel: <?php echo $book['language']; ?></h3>

<h3>Kokkuvõte: <?php echo $book['summary']; ?> </h3>

<h3>Hind: <?php echo $book['price']; echo"€" ?></h3>

<h3>Lehed: <?php echo $book['pages']; ?> </h3> 

<h3>Saadavus: <?php if ($book['stock_saldo'] > 0 ) {
    echo "On saadaval";
} else {
    echo "Pole saadaval";
}     
?>  </h3> 

</body>
</html>