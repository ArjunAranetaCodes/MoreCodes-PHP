<?php 
//Problem 1: Write a program to test if the first character of the String is uppercase.
preg_match('/^[A-Z][a-z0-9_-]{3,19}$/', 'Hello', $matches);
echo $matches  ? "true\n" : "false\n";
preg_match('/^[A-Z][a-z0-9_-]{3,19}$/', 'world', $matches);
echo $matches  ? "true\n" : "false\n";
?>