<?php
require_once __DIR__ . '/models/Movie.php';
require_once __DIR__ . '/src/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP 1</title>
</head>

<body>
  <?php
  foreach ($movies as $movie) {
    echo "<div>";
    $movie->displayProperties();
    echo "</div>";
  }
  ?>
</body>

</html>