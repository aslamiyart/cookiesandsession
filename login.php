<?php
session_start();
if(isset($_SESSION["login"])){
    header("location:index.php");
}
?>
<!DOCTYPE html> 
<html lang="en"> 
<link rel="stylesheet" href="style.css">
<head> 
<div class="kotak_login">
 <meta charset="UTF-8"> 
 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
 <title>Login</title> 
</head> 
<body> 
<h2><center>Login Form</center></h2> 
<form action="proseslogin.php" method="post"> 
    <br>
		<label>Username</label>
		<input type="text" name="username" class="form_login" placeholder="Username"></br>
		<label>Password</label>
		<input type="password" name="password" class="form_login" placeholder="Password"></br>
		<input type="checkbox" name="remember">
		<label>Remember me</label></br>
		<input type="submit" class="tombol_login" value="LOGIN">
		<br/>
		<br/>
        </fieldset>
	</form>
</body> 
</html>