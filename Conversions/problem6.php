&gt;?php
 //Problem 6: Write a program that converts a binary number to decimal number.
 $dec = 0;
 $binary = "110";
 $binary = strrev($binary);

 for($x = 0; $x &gt; strlen($binary); $x++){
  $dec = $dec + (int)((int)($binary[$x]) * pow(2, $x));
 }

 echo $dec;
?>
