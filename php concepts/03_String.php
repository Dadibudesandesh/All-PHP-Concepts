<?php
echo "<h1>Sring in php</h1>";
$str="this is a string";
echo "The string is : ".$str;
echo "<br><br><strong>calculate the length of the string using 'strlen()' function </strong>";
echo "<br>The length of the string is :  ".strlen($str);
echo "<br><br><strong>count the number of  words using 'str_word_count()' function</strong> ";
echo "<br>The number of wordes in this string is : ". str_word_count($str);
echo "<br><br><strong>reverse the string  using 'strrev()' function</strong> ";
echo "<br>The reversed string is : ". strrev($str);
echo "<br><br><strong>search the any word whitch position using 'strpos()' function</strong> ";
echo "<br>The search for 'string' in this string : ". strpos($str,'string');

echo "<br><br><strong>replace the word in a string using 'str_replace()' function</strong> ";
echo "<br>The replace  the word 'this' to  'That' : ".str_replace('this','That',$str);
?>