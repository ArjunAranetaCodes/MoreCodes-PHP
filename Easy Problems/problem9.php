
<form action="program.php" method="post">
 Enter value of num: <input type="text" name = "num"/><br/>
 <input type="submit" name = "submit" value="Submit"/><br/>
</form>
<hr/>
<?php
 $x = 0;
 $sum = 0;
 $num = $_POST["num"];
 for($x = 1; $x <= $num; $x++){
  $sum = $sum + $x;
 }
 echo "Sum of number divisible by 5 from 1 to ".
  $num." is ".$sum;
?>


