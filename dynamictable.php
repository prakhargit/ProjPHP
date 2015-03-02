<?php
$servername="localhost";
$username="root";
$password="root123";
$dbname="notes";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
die("Connection error");
}

$tbl="CREATE TABLE $z
(
one VARCHAR(30),
second VARCHAR(30)
)";
if($conn->query($tbl)===TRUE)
{
echo "table created";
}
else echo "ERROR creating table";

$conn->close();
header('refresh:5;url=index.php');
?>