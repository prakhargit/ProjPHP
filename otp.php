<?php
require_once "Mail.php";
session_start();
$x=session_id();
$y=date('d');
$z=date('m');
$l=$z.$x.$y;
$_SESSION['otp']=$l;
$from="Prakhar|Safe<psafesecuriverifyscr2265@gmail.com>";
$to=$_SESSION['email'];
$subject="One Time Password<do not reply>";
$body=$l;

$host="smtp.gmail.com";
$username="psafesecuriverifyscr2265@gmail.com";
$password="smtppassword";
$headers=array('From'=>$from,'To'=>$to,'Subject'=>$subject);
$smtp=Mail::factory('smtp',array('host'=>$host,'auth'=>true,'username'=>$username,'password'=>$password));

$mail=$smtp->send($to,$headers,$body);

if(PEAR::IsError($mail))
{
echo ("<p>".$mail->getMessage()."</p>");
}
else header('location:secondverify.php');
?>