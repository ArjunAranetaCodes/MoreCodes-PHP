
<?php
 for ($x = 0; $x <= 11; $x++){
  echo Fibonacci($x)."<br/>";
 }

 function Fibonacci($num){
  if (($num == 1) || ($num == 0)){
   return $num;
  }else{
   return Fibonacci($num - 1) + Fibonacci($num - 2);
  }
 }
?>


