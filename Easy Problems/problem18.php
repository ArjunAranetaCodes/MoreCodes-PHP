
<?php
 $word = "program";
 $letter = "a";
 $letterCount = 0;

 for($x = 0; $x < strlen($word); $x++){
  if(strpos($letter, $word[$x]) !== false){
   $letterCount = $letterCount + 1;
  }
 }

 echo "Total: ".$letterCount;

?>


