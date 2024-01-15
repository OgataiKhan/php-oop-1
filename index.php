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
    echo "<p>Genre: $this->genre</p>";
    echo "<p>Language: $this->language</p>";
  }
}

// Creating movie instances
$rebel_moon = new Movie('Rebel Moon', 'Zack Snyder', 'Science Fiction', 'English');
$wonka = new Movie('Wonka', 'Paul King', 'Fantasy', 'English');

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