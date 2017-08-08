
<?php
 $word = "MoreCodes";
 $newWord = "";

 for($x = strlen($word) - 1; $x >= 0; $x--){
  $newWord = $newWord.$word[$x];
 }
 echo $newWord;
?>


