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
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- /Bootstrap -->
  <!-- My css -->
  <link rel="stylesheet" href="src/css/style.css">
  <!-- /My css -->
</head>

<body>
  <?php
  include __DIR__ . '/_partials/header.php';
  ?>
  <?php
  foreach ($movies as $movie) {
    echo "<div>";
    $movie->displayProperties();
    echo "</div>";
  }
  ?>
</body>

</html>