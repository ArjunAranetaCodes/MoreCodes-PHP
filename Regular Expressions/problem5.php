<?php 
//Problem 5: Write a program that matches time in 24 hour format.
preg_match('/^(0?[1-9]|1[012])(:[0-5]\d) [APap][mM]$/', '13:00', $matches);
echo $matches  ? "true\n" : "false\n";
preg_match('/^(0?[1-9]|1[012])(:[0-5]\d) [APap][mM]$/', '8:01 am', $matches);
echo $matches  ? "true\n" : "false\n";
?>