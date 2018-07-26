<?php 
//Problem 12: Write a program that counts the occurrence of digits in a string using Regular Expression.
$string = 'Hello12 World12';
$pattern = '/\D/';
$replacement = '';
echo strlen(preg_replace($pattern, $replacement, $string));
?>