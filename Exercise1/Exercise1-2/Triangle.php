<?php
require_once "Shape.php";
class Triangle extends Shape {
      public function area() :float {
         return  $this->width * $this->height /2;
      }
      public function __toString(): string {
            return "Area of triangle: " . $this->area(). "\n";
      }
}
?>