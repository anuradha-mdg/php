<?php
session_start();
include("connect.php");
$username = $_POST["username"];
$password = $_POST["password"];
$gender = $_POST["gender"];
$education = $_POST["education"];
$address = $_POST["address"];
$sql = "INSERT INTO user(username,password,gender,education,address)VALUES('$username','$password','$gender','$education','$address')";
// execute query
if(mysqli_query($con,$sql))
{
	$_SESSION["username"] = $username;
	header('Location:display.php');
}
else
	echo mysqli_error($con);
//close connection
mysqli_close($con);
	
