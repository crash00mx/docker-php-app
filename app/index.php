<!DOCTYPE html>
<html>
<head>
   <title>docker web app </title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   </head>
   <body>
   <div align=center>
   <img src="docker.png" alt="docker-logo" width="128" height="128" style="vertical-align:middle">
   <h1 style="color:steelblue">Simple PHP Web App</h1>
   <br></br>
   <form method='POST'>
   <h3>Please input your name:</h3>
 <input type="text" name="name">
 <input type="submit" value="Submit Name">
 </form>

<?php
//Retrieve name from query string and store to a local variable
$name = $_POST["name"];
echo "<h3 style='color:slategray'>Hello <font color='red' size=6>$name</font>. If you can see this, the app is working. </h3>";
?>

   <br></br>
   <p style="color:blue"><img src="php.png" alt="php-logo" width="32" height="32"style="vertical-align:middle"> You can view more php info by pressing this button: <button type="button"><a href=phpinfo.php target=new>PHPINFO</a></button></p> 
</div>
</body>
</html>
