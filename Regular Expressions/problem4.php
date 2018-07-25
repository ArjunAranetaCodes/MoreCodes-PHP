<?php 
//Problem 4: Write a program that matches time in 12 hour format.
preg_match('/(((0[1-9])|(1[0-2])):([0-5])([0-9])\\s(a|p)m)/', '08:01 am', $matches);
echo $matches  ? "true\n" : "false\n";
preg_match('/(((0[1-9])|(1[0-2])):([0-5])([0-9])\\s(a|p)m)/', '18:01 pm', $matches);
echo $matches  ? "true\n" : "false\n";
?>