
<form action="program.php" method="post">
 Enter value of num1: <input type="text" name = "num1"/><br/>
 Enter value of num2: <input type="text" name = "num2"/><br/>
 Enter value of num3: <input type="text" name = "num3"/><br/>
 <input type="submit" name = "submit" value="Submit"/><br/>
</form>
<hr/>
<?php
 $num1 = $_POST["num1"];
 $num2 = $_POST["num2"];
 $num3 = $_POST["num3"];
 $ave = ($num1 + $num2 + $num3) / 3;

 echo "Average is ".$ave;
?>


