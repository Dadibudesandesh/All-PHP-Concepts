<?php
// Function to count the total number of words in a string
function countWords($string) {
    // Using str_word_count function to count words in the string
    $wordCount = str_word_count($string);
    return $wordCount;
}

// Input string
$string = "Hello,Everyone Its me sandesh";

// Counting words
$totalWords = countWords($string);

// Displaying the result
echo "Total number of words in the string: $totalWords";
?>
