
<?php
require_once 'db_connection.php'


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <style>
        h1 { color: #000000; }
    </style>
<body>

    <h1> Otsing </h1>
    
    </form>
    
    
    <form action="index.php" method="GET">
        <input id="otsi" name="title" type="text" placeholder="raamatu pealkiri" value="<?=$title;?>">
        <input id="otsi" name="year" type="text" placeholder="raamatu aasta" value="<?=$year;?>">
        <input id="submit" type="submit" style="font-face: 'Comic Sans MS'; font-size: larger; color: #000000 ; background-color: #F36F0D; border: 3pt ridge lightgrey"  value="Otsi" class="button"/>
    </form>
    <ul>
<?php
    $stmt = $pdo->prepare('SELECT * FROM books WHERE release_date LIKE :year AND title LIKE :title');
    $stmt->execute(['year' => '%' . $year . '%', 'title' => '%' . $title . '%']);

  echo '<ul>';
  while ( $row = $stmt->fetch() ) {
    echo '<li><a href="book.php?id=' . $row['id'] . '">' . $row['title'] . '</a></li>';
}
echo '</ul>';
?>
    </ul>

</body>
</html>


</ul>';
?>
    </ul>

</body>
</html>

sta" value="<?=$year;?>">
        <input id="submit" type="submit" style="font-face: 'Comic Sans MS'; font-size: larger; color: #ffffff ; background-color: #ff00ae; border: 3pt ridge lightgrey"  value="Otsi" class="button"/>
    </form>
    <ul>
<?php
  $stmt = $pdo->prepare('SELECT * FROM books WHERE release_date LIKE :year AND title LIKE :title');
  $stmt->execute(['year' => '%' . $year . '%', 'title' => '%' . $title . '%']);

  echo '<ul>';
  while ( $row = $stmt->fetch() ) {
    echo '<li><a href=".book.php?id=' . $row['id'] . '">' . $row['title'] . '</a></li>';
}
echo '</ul>';
?>
    </ul>

</body>
</html>

