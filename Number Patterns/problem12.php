<?php
/*
Problem 12: Write a program to print the pattern of asterisks using loop.
*****
****
***
**
*
*/
 $row = 5;
 for($y = $row; $y > 0; $y--){
  for($x = 0; $x < $y; $x++){
   echo "*";
  }
  echo "<br/>";
 }
?>