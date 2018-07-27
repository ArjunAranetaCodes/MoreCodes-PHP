<?php 
//Problem 20: Write a program that validates if string length is between 5 to 10 using Regular Expression.
preg_match('/\w{5,10}\b/', 'Hello', $matches);
echo $matches  ? "true\n" : "false\n";
preg_match('/\w{5,10}\b/', 'Hi', $matches);
echo $matches  ? "true\n" : "false\n";
?>