<?php
session_start();
$cookie_name="login";
setcookie($cookie_name,"", time() - 3600, "/"); //cookies akan dioverride expire nya menjadi 1 jam kebelakang
session_destroy();
header("location:login.php");
?>
