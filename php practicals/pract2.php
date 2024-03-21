<?php
// Function to calculate factorial of a number
function factorial($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

// Input number
$number = 5; // You can change this number to calculate factorial for a different number

// Calculating factorial
$result = factorial($number);

// Displaying the result
echo "Factorial of $number is: $result";
?>
