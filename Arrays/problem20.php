
<?php
 $arrNumbers = array(4,3,2,1);
 $closest = 0;
 $numDiff = $arrNumbers[0];

 foreach($arrNumbers as $num){
  $diff = 0 - $num;
  $diff = abs($diff);
  if($diff < $numDiff){
   $numDiff = $diff;
   $closest = $num;
  }
 }

 echo "Closest to 0 is ".$closest;
?>


