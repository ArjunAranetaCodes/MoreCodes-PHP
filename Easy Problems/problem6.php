
<form action="program.php" method="post">
 Enter value of num: <input type="text" name = "num"/><br/>
 <input type="submit" name = "submit" value="Submit"/><br/>
</form>
<hr/>
<?php
 if($_POST["num"] % 2 == 0){
  echo "Number is even";
 }else{
  echo "Number is odd";
 }
?>


