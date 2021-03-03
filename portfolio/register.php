<?php
include("config.php");
?>

<!DOCTYPE html>
<html>
<body>
<form action="" method="POST">
ID<input type="text" name="ID"><br>
Password<input type="text" name="Password"><br>
<input type="submit" name="submit">
</form>

<?php
if(isset($_POST['submit']))
{
$ID=$_POST['ID'];
$Password=$_POST['Password'];

mysqli_query($con, "INSERT INTO table2975 values ('$ID','$Password')");

}
?>

</body>
</html>

