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
