<?php
include("connect.php");
$id = $_POST["id"];
$username = $_POST["username"];
$password = $_POST["password"];
$gender = $_POST["gender"];
$education = $_POST["education"];
$address = $_POST["address"];

$sql = "UPDATE user SET username ='$username',password= '$password',gender ='$gender',education ='$education',address='$address' WHERE id = $id";
// execute query
if(!mysqli_query($con,$sql))	
 echo mysqli_error($con);
//close connection
mysqli_close($con);
header('Location: display.php');
	
