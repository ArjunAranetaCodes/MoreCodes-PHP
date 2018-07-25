<?php 
//Problem 8: Write a program that checks if the String if valid url using Regular Expression.
preg_match('/^(https?:\/\/)?(www\\.)?([\w]+\.)+[‌​\w]{2,63}\/?$/', 'http://www.example.com', $matches);
echo $matches  ? "true\n" : "false\n";
preg_match('/^(https?:\/\/)?(www\\.)?([\w]+\.)+[‌​\w]{2,63}\/?$/', 'wwwexamplecom', $matches);
echo $matches  ? "true\n" : "false\n";
?>