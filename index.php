<?php

/**
 * Movie
 */
class Movie
{
  public string $title;
  public $year;
  public string $director;
  public string $genre;
  public string $language;

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
  
  /**
   * setYear
   *
   * @param  mixed $_year
   * @return void
   */
  public function setYear($_year)
  {
    if ($_year <= 2024) {
      $this->year = $_year;
    } elseif ($_year > 2024) {
      $this->year = "Upcoming";
    }
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