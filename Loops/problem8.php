
<?php
 $word = "program";
 $vowels = "aeiou";
 $vowelCount = 0;

 for($x = 0; $x < strlen($word); $x++){
  if(strpos($vowels, $word[$x]) !== false){
   $vowelCount = $vowelCount + 1;
  }
 }

 echo "Total: ".$vowelCount;

?>


