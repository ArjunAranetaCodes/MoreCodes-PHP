<?php 
//Problem 10: Write a program that prints an integer with commas separator using Regular Expression.
$string = '1000';
$pattern = '/(\\d)(?=(\\d{3})+$)/';
$replacement = '1,';
echo preg_replace($pattern, $replacement, $string);
?>