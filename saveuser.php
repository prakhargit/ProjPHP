<html>
<?php

if($_POST["psw"]==$_POST["reenter"])
{
require_once('common1.php');

$username=$_POST["username"];
$email=$_POST["email"];
$name=$_POST["name"];
$psw=$_POST["psw"];
$gender=$_POST["gender"];
$add1=$_POST["add1"];
$add2=$_POST["add2"];
$add3=$_POST["add3"];
$city=$_POST["city"];
$state=$_POST["state"];
$pin=$_POST["pin"];
$country=$_POST["country"];
$dob=$_POST["dob"];
$mobile=$_POST["mobile"];


$location1="userdata/".$username;
$location2="userdata/".$username."/images";
$location3="userdata/".$username."/docs";
$location4="userdata/".$username."/vids";
mkdir("$location1");
mkdir("$location2");
mkdir("$location3");
mkdir("$location4");

$sql="INSERT INTO table3 VALUES('$username','$email','$name','$psw','$gender','$add1','$add2','$add3','$city','$state','$pin','$country','$dob','$mobile')";

$dbc=mysqli_connect(SERVER,USER,PASSWORD,DBNAME) or die("failed to connect");


if (mysqli_query($dbc, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);



?>
<?php
$servername="localhost";
$username="root";
$password="root123";
$dbname="notes";
$z=$_POST["username"];
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
else die("ERROR creating table");

$conn->close();
header('location:index.php');
}
else 
{
	
	echo "<script type=\"text/javascript\">
	      alert(\"Passwords do not match\");
		  </script>";
		  header('location:registration.php');
}
?>

</html>
