<html>
<body>
<?php
session_start();
$username=$_POST['user'];
$password=$_POST['psw1'];


if($username&&$password)
{

$connect=mysql_connect("localhost","root","root123") or die("Connection failed");
mysql_select_db("prakhar") or die("Database error");
$query=mysql_query("SELECT * FROM table3 WHERE username='$username'");
$numrows=mysql_num_rows($query);
if($numrows!=0)
{
while($row=mysql_fetch_assoc($query))
{
$dbusername=$row['username'];
$dbpassword=$row['psw'];
$_SESSION['email']=$row['email'];
$_SESSION['location']=$row['username'];
$_SESSION['passw']=$row['psw'];
}
if($username==$dbusername&&$password==$dbpassword)
{
echo "<h1>Login Success!</h1>";
header('refresh:2;url=otp.php');
}
else echo "<h1>Incorrect password</h1>";
}

else die("<h1>Non existent user</h1>");
}
else die("<h1>Please enter username/password</h1>");
?>
</body>
</html>