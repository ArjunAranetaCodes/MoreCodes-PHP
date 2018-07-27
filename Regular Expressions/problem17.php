<?php 
//Problem 17: Write a program that removes the last word in a string using Regular Expression.
$string = 'Hello World';
$pattern = '/\w+$/';
$replacement = '';
echo preg_replace($pattern, $replacement, $string);
?>