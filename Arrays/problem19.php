
<?php
 $array1 = array(1,2,3);
 $array2 = array(1,2,3);
 $array2 = array_merge($array1, $array2);

 foreach($array2 as $num){
  echo $num."<br/>";
 }

?>


