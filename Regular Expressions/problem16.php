<?php 
//Problem 16: Write a program that takes a value inside a <a> tag using Regular Expression.
$string = '<a>Hello World</a>';
$pattern = '/<(\"[^\"]*\"|\'[^\']*\'|[^\'\">])*>/';
$replacement = '';
echo preg_replace($pattern, $replacement, $string);
?>