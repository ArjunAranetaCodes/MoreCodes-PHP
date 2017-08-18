
<?php
 $arrNumbers = array(1,1,2,3);
 $count = 0;

 foreach($arrNumbers as $num){
  if($num == 1){
   $count = $count + 1;
  }
 }

 echo "Occurence: ".$count;
?>


