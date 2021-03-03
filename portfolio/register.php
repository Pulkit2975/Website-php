<?php
include("config.php");
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>
<body>

 <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <h1><a href="index.html">My<span class="logo_colour">Portfolio</span></a></h1>
         
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <li><a href="main.html">Home</a></li>
<li><a href="about.html">About</a></li>
          <li><a href="work.html">Work</a></li>
          <li><a href="insp.html">Inspiration</a></li>
          <li class="selected"><a href="message.html">Contact</a></li>
        </ul>
      </div>
    </div>


<form action="" method="POST">
<p>Name<input type="text" name="ID"><br></p>
Message
<p><input style="height:200px" type="text" name="Password" size="50"><br></p>
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

 <p><br /><br />To personally contact me send a message at:-</p>
        <p>Phone - 9910688467</p>
        <p>Email- pulkitgr892@gmail.com</p>
</body>
</html>

