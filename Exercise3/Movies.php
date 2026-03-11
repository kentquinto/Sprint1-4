<?php
require_once "Cinema.php";
class Movies extends Cinema {
    public function addMovie(string $movieTitle, int $duration, string $director){
        $this->movies[] = [
            "title" => $movieTitle,
            "duration" => $duration,
            "director" => $director
        ];
    }
    public function displayMoviesInCinema() {
        echo "Movies in " . $this->name . ", " . $this->location . ":\n";
        foreach ($this->movies as $movie) {
            echo "· " . $movie["title"] . " | Duration: " . $movie["duration"] . " minutes | Director: " . $movie["director"] . "\n";
        }
    }
    public function displayLongestMovie() {
        if (empty($this->movies)) {
            echo "No movies in the catalogue." . "\n";
            return;
        }
        $longestMovie = $this->movies[0];
        foreach ($this->movies as $movie) {
            if ($movie["duration"] > $longestMovie["duration"]) {
                $longestMovie = $movie;
            }
        }
        echo "Longest movie: " . $longestMovie["title"] . "\n";
    }
    public function searchMovieByDirector(string $director) {
        $foundMovies = [];
        foreach ($this->movies as $movie) {
            if ($movie["director"] === $director) {
                $foundMovies[] = $movie;
            }
        }
        if (empty($foundMovies)) {
            echo "No movies by this director! " . ".\n";
        } else {
            echo "Movies directed by: " . $director . "\n";
            foreach ($foundMovies as $movie) {
                echo "· " . $movie["title"] . "\n";
            }
        }
    }
}
?>