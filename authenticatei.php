<?php
session_start();
$v1=$_SESSION['passw'];
$v2=$_POST['secpass'];

if($v1==$v2) 
{
echo "Authentication successful";
header('refresh:1;url=image.php');
}
else 
{
echo "Authentication failed";
session_destroy();
header('refresh:1;url=index.php');
}
?>

