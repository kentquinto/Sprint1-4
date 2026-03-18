<?php
class Movie {
    public $title;
    public $duration;
    public $director;
    public function __construct(string $title, int $duration, string $director){
        $this->title = $title;
        $this->duration = $duration;
        $this->director = $director;
    }
}
?>