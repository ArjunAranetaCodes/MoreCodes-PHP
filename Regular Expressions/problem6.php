<?php 
//Problem 6: Write a program that removes white space and non-visible characters.
$string = 'Hello World';
$pattern = '/\s/';
$replacement = '';
echo preg_replace($pattern, $replacement, $string);
?>