
<?php
 $num = $_POST["num"];

 if($num < 0){
  echo "Terminated";
  die();
 }
?>

<form action="problem.php" method="post">
 <input type="text" name="num" value=""> <br/>
 <input type="submit" value="Submit">
</form>


