<?php
// Function to find the largest number in an array
function findLargestNumber($arr) {
    // Initializing max to the first element of the array
    $max = $arr[0];

    // Looping through the array to find the maximum element
    foreach ($arr as $value) {
        if ($value > $max) {
            $max = $value;
        }
    }

    return $max;
}

// Input array
$array = [10, 30, 20, 50, 40];

// Finding the largest number in the array
$largestNumber = findLargestNumber($array);

// Displaying the result
echo "The largest number in the array is: $largestNumber";
?>
