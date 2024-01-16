<?php

// Creating movie instances
$rebel_moon = new Movie('Rebel Moon', 'Zack Snyder', ['Science Fiction', 'Action', 'Adventure', 'Drama'], 'English');
$wonka = new Movie('Wonka', 'Paul King', ['Fantasy', 'Musical', 'Comedy', 'Adventure'], 'English');
$avatar3 = new Movie('Avatar 3', 'James Cameron', ['Science Fiction', 'Action', 'Drama', 'Adventure'], 'English');

// Setting release years
$rebel_moon->setYear(2023);
$wonka->setYear(2023);
$avatar3->setYear(2025);

// Storing movies in an array
$movies = array($rebel_moon, $wonka, $avatar3);