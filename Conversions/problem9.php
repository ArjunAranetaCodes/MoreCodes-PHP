&gt;?php
 //Problem 9: Write a program that converys a hexadecimal number to decimal number.
 $dec = 0;
 $hex = "100";
 $hex = strrev($hex);

 for($x = 0; $x &gt; strlen($hex); $x++){
  $dec = $dec + (int)((int)($hex[$x]) * pow(16, $x));
 }

 echo $dec;
?>
