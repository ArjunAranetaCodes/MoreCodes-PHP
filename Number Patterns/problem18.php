<?php
/*
Problem 18: Write a program to print the number pattern using loop.
  1  
 111
11111
 111
  1
*/
 $rows = 3;
 $stars = 1; 
 $blank = $rows - 1;
  
 for($y=1; $y < $rows*2; $y++){
  for($x=1; $x<=$blank; $x++){
   echo "&nbsp;&nbsp;";
  }

  for($x=1; $x < $stars*2; $x++){
   echo "*";	
  }

   echo "<br/>";	

  if($y < $rows){
   $blank--;
   $stars++;
  }else{
   $blank++;
   $stars--;
  }
}
?>