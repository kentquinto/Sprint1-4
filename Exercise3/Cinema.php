<?php
class Cinema {
    public $name;
    public $location;
    public $movies = [];
    public function __construct(string $name, string $location) {
        $this->name = $name;
        $this->location = $location;
    }
}
?>