<?php
/*
Problem 13: Write a program to print the pattern of asterisks using loop.
*
**
***
****
*****
****
***
**
*
*/
 $row = 5;
 for($y = 0; $y <= 5; $y++){
  for($x = 0; $x < $y; $x++){
   echo "*";
  }
  echo "<br/>";
 }
 
 for($y = $row - 1; $y > 0; $y--){
  for($x = 0; $x < $y; $x++){
   echo "*";
  }
  echo "<br/>";
 }
?>