
<form action="program.php" method="post">
 Enter value of radius: <input type="text" name = "radius"/><br/>
 <input type="submit" name = "submit" value="Submit"/><br/>
</form>
<hr/>
<?php
 $radius = $_POST['radius'];
 $pi = 3.14;
 $dia = $radius * $radius;
 $area = $pi * $dia;
 $cir = 2.0 * $pi * $radius;
 echo "Diameter of the circle is ".$dia."<br/>";
 echo "Area of the circle is ".$area."<br/>";
 echo "Circumference of the circle is ".$cir."<br/>";
?>


