<?php 
//Problem 18: Write a program that extracts string inside quotation marks using Regular Expression.
preg_match('/\'([^\"]*)\'/', "Hello 'World'", $matches);
echo $matches[0];
?>