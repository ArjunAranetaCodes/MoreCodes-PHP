<?php
/*
Problem 16: Write a program to print the number pattern using loop.
12345
1234
123
12
1
*/
 $row = 5;
 for($y = $row; $y > 0; $y--){
  for($x = 0; $x < $y; $x++){
   echo $x + 1;
  }
  echo "<br/>";
 }
?>