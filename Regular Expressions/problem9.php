<?php 
//Problem 9: Write a program that checks if the string is alphanumeric using Regular Expression.
preg_match('/(([A-Z].*[0-9])|([0-9].*[A-Z]))/', 'HelloWorld', $matches);
echo $matches  ? "true\n" : "false\n";
preg_match('/(([A-Z].*[0-9])|([0-9].*[A-Z]))/', 'HelloWorld123', $matches);
echo $matches  ? "true\n" : "false\n";
?>