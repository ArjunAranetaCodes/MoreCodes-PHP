
<form action="program.php" method="post">
 Enter name: <input type="text" name="name">
</form>

<?php
 echo "Hello ".$_POST["name"];
?>


