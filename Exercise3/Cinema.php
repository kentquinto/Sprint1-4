<?php
class Cinema {
    public $name;
    public $location;
    public $movies = [];
    public function __construct(string $name, string $location) {
        $this->name = $name;
        $this->location = $location;
    }
    public function addMovie(Movie $movie) {
        $this-> movies[] = $movie;
    }
    public function showMovies() {
        echo "Cinema: " . $this->name . " | Location: " . $this->location . "\n";
        foreach ($this->movies as $movie) {
            echo $movie->title . " | "
            . $movie->duration . " minutes | "
            . $movie->director . "\n";
        }
    }
    public function longestMovie() {
        if (empty($this->movies)) {
            echo "No movies available" . "\n";
            return;
        }
        $longest = $this->movies[0];
        
        foreach ($this->movies as $movie) {
            if ($movie->duration > $longest->duration) {
                $longest = $movie;
            }
        }
        echo "Longest movie: " . $longest->title . "\n";
    }
    public function searchByDirector(string $director) {
    echo "Movies by " . $director . "\n";
    foreach ($this->movies as $movie) {

        if ($movie->director === $director) {
            echo $movie->title . "\n";
        }
    }
}
}
?>