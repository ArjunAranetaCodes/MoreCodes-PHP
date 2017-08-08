
<?php
 $word = "MoreCodes";
 $word = str_split($word);
 $letterCount = 0;
 foreach($word as $letter){
  $letterCount = $letterCount + 1;
 }
 echo "String Length: ".$letterCount;
?>


