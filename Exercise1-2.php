<?php
class Shape {
    public $width;
    public $height;
     function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
     }
}
class Rectangle extends Shape {
      function area() {
         return $this->width * $this->height;
      }
}
class Triangle extends Shape {
      function area() {
         return  $this->width * $this->height /2;
      }
}
$rectangle = new Rectangle(5, 10);
$triangle = new Triangle(5, 10);
echo "Area of the rectangle: " . $rectangle->area() . "\n";
echo "Area of the triangle: " . $triangle->area() . "\n";

?>

