<?php
/*
Problem 7: Write a program to print the number pattern of ones and zeros using loop.
10101
01010
10101
01010
10101
*/
 $count = 0;
 for($y = 0; $y < 5; $y++){
  for($x = 0; $x < 5; $x++){    
    $count += 1;
    if($count % 2 == 1){
      echo "1";
    }else{
      echo "0";
    }		
  }
  echo "<br/>";
 }
?>