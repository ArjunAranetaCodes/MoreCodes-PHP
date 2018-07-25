<?php 
//Problem 2: Write a program that matches email address.
preg_match('/^[_A-Za-z0-9-\+]+(\.[_A-Za-z0-9-]+)*@[A-Za-z0-9-]+(\.[A-Za-z0-9]+)*(\.[A-Za-z]{2,})$/', 'mark@yahoo.com', $matches);
echo $matches  ? "true\n" : "false\n";
preg_match('/^[_A-Za-z0-9-\+]+(\.[_A-Za-z0-9-]+)*@[A-Za-z0-9-]+(\.[A-Za-z0-9]+)*(\.[A-Za-z]{2,})$/', 'mark-yahoo.com', $matches);
echo $matches  ? "true\n" : "false\n";
?>