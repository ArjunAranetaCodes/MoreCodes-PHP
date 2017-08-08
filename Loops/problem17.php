
<?php
 $num1 = 1;
 $num2 = 1;

 echo $num1."<br/>";
 while ($num2 < 100){
  echo $num2."<br/>";
  $num2 = $num2 + $num1;
  $num1 = $num2 - $num1;
 }
?>


