<?php
// Function to add two numbers
function add($num1, $num2) {
    return $num1 + $num2;
}

// Function to subtract two numbers
function subtract($num1, $num2) {
    return $num1 - $num2;
}

// Function to multiply two numbers
function multiply($num1, $num2) {
    return $num1 * $num2;
}

// Function to divide two numbers
function divide($num1, $num2) {
    if ($num2 != 0) {
        return $num1 / $num2;
    } else {
        return "Error: Division by zero!";
    }
}

// Input values
$number1 = 10;
$number2 = 5;

// Perform operations
$sum = add($number1, $number2);
$difference = subtract($number1, $number2);
$multiplication = multiply($number1, $number2);
$division = divide($number1, $number2);

// Display results
echo "Number 1: $number1<br>";
echo "Number 2: $number2<br>";
echo "Sum: $sum<br>";
echo "Difference: $difference<br>";
echo "Multiplication: $multiplication<br>";
echo "Division: $division<br>";
?>
