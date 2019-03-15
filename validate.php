<?php
session_start();
include("connect.php");
$username = $_POST["username"];
$password = $_POST["password"];
$sql = "SELECT * FROM user where username='$username'and password='$password'";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result) >0)
{
	$_SESSION["username"] = $username;
	header('Location: display.php');
}
else
{
   header('Location: login.php?msg=1');
}