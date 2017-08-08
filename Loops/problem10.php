
<?php
 $num = 371;
 $sum = 0;
 $temp = 0;
 $rmdr = 0;

 $temp = $num;

 while ($temp != 0){
  $rmdr = $temp % 10;
  $sum = $sum + ($rmdr * $rmdr * $rmdr);
  $temp = $temp / 10;
 }

 if ($num == $sum){
  echo "Armstrong number";
 }else {
  echo "Not an Armstrong number";
 }
?>


