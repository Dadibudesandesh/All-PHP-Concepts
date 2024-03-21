<?php
function replaceWord($string, $wordToReplace, $replacement) {
    $newString = str_replace($wordToReplace, $replacement, $string);
    return $newString;
}

$string = "Hello,Its me sandesh.<br>";

$wordToReplace = "sandesh";
$replacement = "Sandesh Dadibude";

$newString = replaceWord($string, $wordToReplace, $replacement);

echo "Original string: $string\n";
echo "After replacing '$wordToReplace' with '$replacement':\n$newString";
?>
