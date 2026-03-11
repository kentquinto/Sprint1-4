<?php
require_once "Shape.php";
class Triangle extends Shape {
      public function area() {
         return  $this->width * $this->height /2;
      }
}
?>