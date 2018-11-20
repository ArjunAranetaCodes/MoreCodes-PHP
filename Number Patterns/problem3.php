<?php
/*
Problem 3: Write a program to print the number pattern of ones and zeros using loop.
01010
01010
01010
01010
01010
*/
 for($y = 0; $y < 5; $y++){
  for($x = 0; $x < 5; $x++){
    if($x % 2 == 0){
      echo "1";
    }else{
      echo "0";
    }	
  }
  echo "<br/>";
 }
?>