<?php

/**
 * Movie
 */
class Movie
{
  public $title;
  public $year;
  public $director;
  public $genre;
  public $language;
  
  /**
   * __construct
   *
   * @return void
   */
  function __construct(
    $_title,
    $_director,
    $_genre,
    $_language
  ) {
    $this->title = $_title;
    $this->director = $_director;
    $this->genre = $_genre;
    $this->language = $_language;
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP 1</title>
</head>

<body>

</body>

</html>