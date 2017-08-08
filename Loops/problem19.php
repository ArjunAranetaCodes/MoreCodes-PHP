
<?php
 PrintEven(10);

 function PrintEven($num){
  if ($num == 0){
   return $num;
  }else{
   if ($num % 2 == 0){
    echo $num."<br/>";
   }
   return PrintEven($num - 1);
  }
 }
?>


