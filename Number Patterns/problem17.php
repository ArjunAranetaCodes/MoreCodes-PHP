<?php
/*
Problem 17: Write a program to print the number pattern using loop.
1
12
123
1234
12345
1234
123
12
1
*/
 $row = 5;
 for($y = 0; $y <= 5; $y++){
  for($x = 0; $x < $y; $x++){
   echo $x + 1;
  }
  echo "<br/>";
 }
 
 for($y = $row - 1; $y > 0; $y--){
  for($x = 0; $x < $y; $x++){
   echo $x + 1;
  }
  echo "<br/>";
 }
?>