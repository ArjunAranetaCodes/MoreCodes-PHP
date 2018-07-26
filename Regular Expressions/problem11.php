<?php 
//Problem 11: Write a program that counts the occurrence of a string in a string using Regular Expression.
$string = 'HelloWorldHelloWorld';
$pattern = '/Hello/';
$replacement = '';
$count1 = strlen($string);
$count2 = strlen(preg_replace($pattern, $replacement, $string));
echo (($count1 - $count2) / (strlen($pattern) - 2));
?>