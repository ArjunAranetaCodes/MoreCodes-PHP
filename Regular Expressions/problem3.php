<?php 
//Problem 3: Write a program that checks if string contains sample format date of (yyyy-mm-dd)
preg_match('/([0-9]{4})-([0-9]{2})-([0-9]{2})/', '2018-01-02', $matches);
echo $matches  ? "true\n" : "false\n";
preg_match('/([0-9]{4})-([0-9]{2})-([0-9]{2})/', '01-01-02', $matches);
echo $matches  ? "true\n" : "false\n";
?>