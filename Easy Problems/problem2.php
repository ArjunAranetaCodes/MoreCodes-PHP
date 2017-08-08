
<form action="program.php" method="post">
 Enter value of num1: <input type="text" name = "num1"/><br/>
 Enter value of num2: <input type="text" name = "num2"/><br/>
 <input type="submit" name = "submit" value="Submit"/><br/>
</form>
<hr/>
<?php
 $sum = $_POST['num1'] + $_POST['num2'];
 $diff = $_POST['num1'] - $_POST['num2'];
 $prod = $_POST['num1'] * $_POST['num2'];
 $quot = $_POST['num1'] / $_POST['num2'];
 echo "Sum is ".$sum."<br/>";
 echo "Difference is ".$diff."<br/>";
 echo "Product is ".$prod."<br/>";
 echo "Quotient is ".$quot."<br/>";
?>


