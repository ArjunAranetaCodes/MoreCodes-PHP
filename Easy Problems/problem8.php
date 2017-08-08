
<?php
 $x = 0;
 $sum = 0;
 for($x = 1; $x <= 30; $x++){
  if($x % 5 == 0){
   $sum = $sum + $x;
  }
 }
 echo "Sum of number divisible by 5 from 1 to 30 is ".$sum;
?>


