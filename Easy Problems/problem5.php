
<form action="program.php" method="post">
 Enter value of celsius: <input type="text" name = "celsius"/><br/>
 <input type="submit" name = "submit" value="Submit"/><br/>
</form>
<hr/>
<?php
 $celsius = $_POST['celsius'];
 $farenheit = (9.0/5.0) * $celsius + 32.0;
 echo $celsius."C equals to ".$farenheit."F<br/>";
?>


