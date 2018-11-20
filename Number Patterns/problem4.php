<?php
/*
Problem 4: Write a program to print the number pattern of ones and zeros using loop.
10001
10001
10001
10001
10001
*/
 for($y = 0; $y < 5; $y++){
  for($x = 0; $x < 5; $x++){
   if(($x == 0) || ($x == 4)){
      echo "1";
    }else{
      echo "0";
    }	
  }
  echo "<br/>";
 }
?>