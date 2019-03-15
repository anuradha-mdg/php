<?php
include("connect.php");
$id= $_POST['del'];
foreach($id as $i)
{
   $sql = "DELETE FROM user where id = $i";   
	if(!mysqli_query($con,$sql))
     echo mysqli_error($con);
}
mysqli_close($con);
header('Location: display.php');
?>