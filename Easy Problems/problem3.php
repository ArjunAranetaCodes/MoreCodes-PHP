
<form action="program.php" method="post">
 Enter value of length: <input type="text" name = "length"/><br/>
 Enter value of width: <input type="text" name = "width"/><br/>
 <input type="submit" name = "submit" value="Submit"/><br/>
</form>
<hr/>
<?php
 $area = $_POST['length'] * $_POST['width'];
 echo "Area of Rectangle is ".$area."<br/>";
?>


