<?php
/*
Problem 9: Write a program to print the number pattern of ones and zeros using loop.
11011
11011
00000
11011
11011
*/
 $row = 5;
 $col = 5;
 for($y = 0; $y < $row; $y++){
  for($x = 0; $x < $col; $x++){  
   if(floor($col / 2) == $x || floor($row / 2) == $y){
    echo "0";
   }else if(($col % 2 == 0 && floor($col / 2) == $x) || ($row % 2 == 0 && floor($row / 2) == $y)){
    echo "0";
   }else{
    echo "1";
   }			
  }
  echo "<br/>";
 }
?>