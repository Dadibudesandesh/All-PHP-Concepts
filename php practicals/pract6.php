<?php
// Function to calculate the area of a triangle
function triangleArea($base, $height) {
    $area = 0.5 * $base * $height;
    return $area;
}

// Function to calculate the area of a rectangle
function rectangleArea($length, $width) {
    $area = $length * $width;
    return $area;
}

// Input values for triangle
$triangleBase = 5;
$triangleHeight = 8;

// Input values for rectangle
$rectangleLength = 6;
$rectangleWidth = 4;

// Calculating area of triangle
$triangleArea = triangleArea($triangleBase, $triangleHeight);

// Calculating area of rectangle
$rectangleArea = rectangleArea($rectangleLength, $rectangleWidth);

// Displaying the results
echo "Area of Triangle: " . $triangleArea . " square units<br>";
echo "Area of Rectangle: " . $rectangleArea . " square units<br>";
?>
