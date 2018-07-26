<?php 
//Problem 15: Write a program that takes a value inside a <div> tag using Regular Expression.
$string = '<div>Hello World</div>';
$pattern = '/<(\"[^\"]*\"|\'[^\']*\'|[^\'\">])*>/';
$replacement = '';
echo preg_replace($pattern, $replacement, $string);
?>