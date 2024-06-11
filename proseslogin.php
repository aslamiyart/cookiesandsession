<?php
session_start();
if(isset($_SESSION["login"])){
    header("location:index.php");
}
require 'functions.php';
$username = $_POST['username']; 
$password = $_POST['password']; 
$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'"; 
$result = $konek->query($sql); 
if ($result->num_rows > 0) { 
 $_SESSION["login"] = true; 

 //cek remember me
 if(isset($_POST['remember'])){
    //buat cookie
        $cookie_name="login";
        $cookie_value="true";
        setcookie($cookie_name,$cookie_value,time()+3600,"/");
 }
 header("Location: index.php"); 
} else { 
 echo "Login gagal. <a href='login.php'>Coba lagi</a>"; 
} 
$konek->close(); 
?>
