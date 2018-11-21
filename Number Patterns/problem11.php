<?php
/*
Problem 11: Write a program to print the pattern of asterisks using loop.
*
**
***
****
*****
*/
 for($y = 0; $y <= 5; $y++){
  for($x = 0; $x < $y; $x++){
   echo "*";
  }
  echo "<br/>";
 }
?>