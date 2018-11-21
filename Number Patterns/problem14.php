<?php
/*
Problem 14: Write a program to print the number pattern using loop.
1
22
333
4444
55555
*/
 for($y = 0; $y <= 5; $y++){
  for($x = 0; $x < $y; $x++){
   echo $y;
  }
  echo "<br/>";
 }
?>