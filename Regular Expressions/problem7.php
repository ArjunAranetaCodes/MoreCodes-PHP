<?php 
//Problem 7: Write a program that counts vowels in a String using Regular Expression.
$string = 'Hello World';
$pattern = '/[^aeiouAEIOU]/';
$replacement = '';
echo strlen(preg_replace($pattern, $replacement, $string));
?>