//Variables and Input

<form action="input.php" method="post">
 What is your name?: <input type="text" name = "name"/> <br />
 What is your sex?: <input type="text" name = "sex"/><br />
 What is your age?: <input type="text" name = "age"/><br />
 <input type="submit" name = "submit" value="Submit"/><br />
</form>
<hr />
<?php
 echo $_POST['name']."<br/>";
 echo $_POST['sex']."<br/>";
 echo $_POST['age']."<br/>";
?>





