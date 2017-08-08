
<?php
 $num = 33 ;
 $sum = 0;
 $temp = 0;
 $rmdr = 0;

 $temp = $num;

 while ($temp != 0){
  $rmdr = intval($temp % 10);
  $sum = $sum * 10 + $rmdr;
  $temp = intval($temp / 10);
 }

 if ($num == $sum){
  echo "Palindrome number";
 }else {
  echo "Not a Palindrome number";
 }
?>


