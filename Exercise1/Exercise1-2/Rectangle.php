<?php
require_once "Shape.php";
class Rectangle extends Shape {
      public function area() : float {
         return $this->width * $this->height;
      }
      public function __toString(): string {
            return "Area of rectangle: " . $this->area() . "\n";
      }
}
?>