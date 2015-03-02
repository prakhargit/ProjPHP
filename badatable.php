<?php
session_start();
$server="localhost";
$user="root";
$password5="root123";
$db="notes";
$value1=$_POST["one"];
$value2=$_POST["two"];
$khwaja=$_SESSION['location'];
$sql="INSERT INTO {$khwaja} VALUES('$value1','$value2')";

$dbc=mysqli_connect($server,$user,$password5,$db) or die("failed to connect");


if (mysqli_query($dbc, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
header('location:print.php');
?>