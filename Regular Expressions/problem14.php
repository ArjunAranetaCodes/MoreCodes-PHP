<?php 
//Problem 14: Write a program that recognizes valid hex color value using Regular Expression.
$pattern = "/^([01]?\d\d?|2[0-4]\d|25[0-5])\.([01]?\d\d?|2[0-4]\d|25[0-5])\." .
                 "([01]?\d\d?|2[0-4]\d|25[0-5])\.([01]?\d\d?|2[0-4]\d|25[0-5])$/";
preg_match($pattern, '192.168.1.1', $matches);
echo $matches  ? "true\n" : "false\n";
preg_match($pattern, '1.1.1.1.1', $matches);
echo $matches  ? "true\n" : "false\n";
?>