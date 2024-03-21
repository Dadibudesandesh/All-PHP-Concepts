<?php
function swapWithoutThirdVariable(&$num1, &$num2) {
    $num1 = $num1 + $num2;
    $num2 = $num1 - $num2;
    $num1 = $num1 - $num2;
}

function swapWithThirdVariable(&$num1, &$num2) {
    $temp = $num1;
    $num1 = $num2;
    $num2 = $temp;
}

$num1 = 10;
$num2 = 20;

echo "Before swapping: ";
echo "Number 1 = " . $num1 . ", Number 2 = " . $num2 . "<br>";

swapWithoutThirdVariable($num1, $num2);
echo "After swapping without third variable: ";
echo "Number 1 = " . $num1 . ", Number 2 = " . $num2 . "<br>";

$num1 = 10;
$num2 = 20;

swapWithThirdVariable($num1, $num2);
echo "After swapping with third variable: ";
echo "Number 1 = " . $num1 . ", Number 2 = " . $num2 . "<br>";
?>
