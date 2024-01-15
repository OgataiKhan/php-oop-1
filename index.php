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
    string $_title,
    string $_director,
    array $_genre,
    string $_language
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
  public function setYear(int $_year)
  {
    if ($_year <= 2024) {
      $this->year = $_year;
    } else {
      $this->year = "Upcoming";
    }
  }

  /**
   * displayProperties
   *
   * @return void
   */
  public function displayProperties()
  {
    echo "<h2>$this->title</h2>";
    echo "<p>Release Year: $this->year</p>";
    echo "<p>Director: $this->director</p>";
    echo "<p>Genre: " . implode(", ", $this->genre) . "</p>";
    echo "<p>Language: $this->language</p>";
  }
}

// Creating movie instances
$rebel_moon = new Movie('Rebel Moon', 'Zack Snyder', ['Science Fiction', 'Action', 'Adventure', 'Drama'], 'English');
$wonka = new Movie('Wonka', 'Paul King', ['Fantasy', 'Musical', 'Comedy', 'Adventure'], 'English');

// Setting release years
$rebel_moon->setYear(2023);
$wonka->setYear(2023);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP 1</title>
</head>

<body>
  <div>
    <?php $rebel_moon->displayProperties(); ?>
  </div>
  <div>
    <?php $wonka->displayProperties(); ?>
  </div>
</body>

</html>