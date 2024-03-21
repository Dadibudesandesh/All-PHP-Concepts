<?php
// Function to find the smallest number in an array
function findSmallestNumber($arr) {
    // Initializing min to the first element of the array
    $min = $arr[0];

    // Looping through the array to find the minimum element
    foreach ($arr as $value) {
        if ($value < $min) {
            $min = $value;
        }
    }

    return $min;
}

// Input array
$array = [10, 30, 20, 50, 40];

// Finding the smallest number in the array
$smallestNumber = findSmallestNumber($array);

// Displaying the result
echo "The smallest number in the array is: $smallestNumber";
?>
