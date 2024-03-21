<?php
// Function to find the occurrence of a word in a string
function countWordOccurrence($string, $word) {
    // Using substr_count function to count occurrences of the word in the string
    $occurrences = substr_count($string, $word);
    return $occurrences;
}

// Input string
$string = "Its me Sandesh, Sandesh is a nice boy. Sandesh is a developer ";

// Word to find occurrence
$wordToFind = "Sandesh";

// Finding occurrence of the word
$wordOccurrences = countWordOccurrence($string, $wordToFind);

// Displaying the result
echo "The word '$wordToFind' occurs $wordOccurrences times in the string.";
?>
