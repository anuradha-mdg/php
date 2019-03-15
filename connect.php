<?php
$user = "root";
$password = "";
$server = "localhost";
$database = "project";

// Create connection
$con = mysqli_connect($server,$user,$password,$database);

// Check connection
if(!$con)
	echo mysqli_error($con);


?>