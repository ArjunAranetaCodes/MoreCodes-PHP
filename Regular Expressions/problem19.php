<?php 
//Problem 19: Write a program that counts all numbers in a string using Regular Expression.
$string = 'Hello World123';
$pattern = '/[^0-9]/';
$replacement = '';
echo preg_replace($pattern, $replacement, $string);
?>