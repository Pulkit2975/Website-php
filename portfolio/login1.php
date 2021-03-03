<?php
session_start();
?>

<?php
include("config.php");
if(isset($_POST['btn']))
{
$uname= mysqli_real_escape_string($con,$_POST['username']) ;
$pass=mysqli_real_escape_string($con,$_POST['password']);

$sql = mysqli_query($con, "SELECT * FROM table2975 WHERE id=$_GET[$uname] and password=$_GET[$pass]");  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        } 
}
?> 

<!DOCTYPE html>
<html>
<body>
<form method='post' action='login1.php'>
<label> Username: </label>
<input type="text" name="text" id="text"/> 
<br>
 <label> Password: </label>
<input type="password" name="password" id="password"/>
<br>
<input type="submit" name="btn" id="btn" value="Login"/>
<br>
</form>

</body>
</html>


