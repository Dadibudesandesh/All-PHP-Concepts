<?php
readfile("html.html");
$textFile=fopen("text.txt","r");  // this function there are two argument first is file name and second was mode
$fileContent= fread($textFile,filesize("text.txt")); // in this function give to arguments file and lenght of file
echo $fileContent;
?>