<?php
require_once "Cinema.php";
require_once "Movies.php";
$cinema1 = new Movies("Cinesa", "Barcelona");
$cinema1->addMovie("DragonBall", 111, "Akira Toriyama");
$cinema1->addMovie("Doraemon", 152, "Fujiko F. Fujio");
$cinema1->addMovie("Pokemon", 169, "Satoshi Tajiri");
$cinema1->addMovie("Naruto", 154, "Masashi Kishimoto");
$cinema1->addMovie("DragonBall2", 142, "Akira Toriyama");
$cinema1->displayMoviesInCinema();
$cinema1->displayLongestMovie();
$cinema1->searchMovieByDirector("Akira Toriyama");?>