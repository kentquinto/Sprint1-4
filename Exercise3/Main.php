<?php
require_once "Cinema.php";
require_once "Movies.php";
$cinema = new Cinema("Cinesa", "Barcelona");
$cinema->addMovie(new Movie("DragonBall", 111, "Akira Toriyama"));
$cinema->addMovie(new Movie("Doraemon", 152, "Fujiko F. Fujio"));
$cinema->addMovie(new Movie("Pokemon", 169, "Satoshi Tajiri"));
$cinema->addMovie(new Movie("Naruto", 154, "Masashi Kishimoto"));
$cinema->addMovie(new Movie("DragonBall2", 142, "Akira Toriyama"));
$cinema->showMovies();
$cinema->longestMovie();
$cinema->searchByDirector("Akira Toriyama");
?>