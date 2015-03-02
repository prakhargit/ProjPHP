<?php
session_start();
$var1=$_POST['otpp'];
$var2=$_SESSION['otp'];
if($var1==$var2) header('location:home.php');
else 
{
echo("Authentication Failed!");
session_destroy();
}
?>