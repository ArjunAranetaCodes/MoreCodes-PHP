<?php 
//Problem 13: Write a program that recognizes valid hex color value using Regular Expression.
preg_match('/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/', '#fff', $matches);
echo $matches  ? "true\n" : "false\n";
preg_match('/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/', '#asdf', $matches);
echo $matches  ? "true\n" : "false\n";
?>