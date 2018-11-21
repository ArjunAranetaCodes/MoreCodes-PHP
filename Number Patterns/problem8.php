<?php
/*
Problem 8: Write a program to print the number pattern of ones and zeros using loop.
11111
11111
11011
11111
11111
*/
 $row = 5;
 $col = 5;
 for($y = 0; $y < $row; $y++){
  for($x = 0; $x < $col; $x++){  
   if($x == floor($row / 2) && $y == floor($col / 2)){
    echo "0";
   }else{
    echo "1";
   }				
  }
  echo "<br/>";
 }
?>