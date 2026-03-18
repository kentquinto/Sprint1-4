<?php
require_once "Shape.php";
require_once "Rectangle.php";
require_once "Triangle.php";
$rectangle = new Rectangle(5, 10);
$triangle = new Triangle(5, 10);
echo $rectangle;
echo $triangle;
?>