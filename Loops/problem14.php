
<form action="problem.php" method="post">
 <input type="text" name="num1" value=""> <br/>
 <input type="text" name="num2" value=""> <br/>
 <input type="text" name="num3" value=""> <br/>
 <input type="text" name="num4" value=""> <br/>
 <input type="text" name="num5" value=""> <br/>
 <input type="submit" value="Compute">
</form>

<?php
 $num1 = $_POST["num1"];
 $num2 = $_POST["num2"];
 $num3 = $_POST["num3"];
 $num4 = $_POST["num4"];
 $num5 = $_POST["num5"];
 $ave = ($num1 + $num2 + $num3 + $num4 + $num5) / 5;
 echo "Average is ".$ave;
?>


