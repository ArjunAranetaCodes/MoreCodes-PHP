//Basics of Functions

<?php
 function1();
 function2(5);
 echo "It's true! 1+1 = ".function3()."<br/>";
 echo "Hi ".function4("More","Codes")."<br/>";

 //function that has no return value and no passing argument/parameter
 function function1(){
  echo "Hello there!<br/>";
 }

 //function that has no return value but has passing argument/parameter
 function function2($num){
  echo "That number is ".num."<br/>";
 }

 //function that has return value but has no passing argument/parameter
 function function3(){
  $sum = 1 + 1;
  return $sum;
 }

 //function that has return value and has passing argument/parameter
 function function4($firstName, $lastName){
  $fullName = $firstName." ".$lastName;
  return $fullName;
 }
?>
