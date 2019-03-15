<?php session_start();?>
<?php if(isset($_SESSION["username"])){?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="container">
<header>
   <h1>PHP Project</h1>
</header>
  
<nav>
  <ul>
  <li><a href="#">Home</a></li>
    <li><a href="#">About Us</a></li>
    <li><a href="#">Contact Us</a></li>
    
  </ul>
</nav>

<article>
<h1 style="float:right"><?php echo "Welcome ".ucwords($_SESSION["username"])?><h1>

<br/>
<h5><a href="logout.php" style="float:right">Logout</a></h5>
  <h1>Data</h1>
  
 <form method="post" action="delete.php">
	<?php
include("connect.php");
$sql = "SELECT * FROM user ";
$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result) >0)
{
	echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Gender</th><th>Education</th><th>Address</th><th>Delete</th></tr>";
	while($row = mysqli_fetch_array($result))
		echo "<tr><td><a href='edit.php?id=$row[id]'> ".$row['id'] ."</a></td><td>". $row['username']." </td><td> ". $row['gender']." </td><td>" .$row['education']."</td><td>" .$row['address']."</td><td><input type='checkbox' name='del[]' value='$row[id]'></td></tr>";
echo "</table><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' value='Delete'>";
	}

else
	echo mysqli_error($con);

mysqli_close($con);
?>
</form>
</article>

<footer>Copyright &copy; 2018</footer>


</div>

</body>
</html>
<?php
}
else
header('Location:login.php');

?>