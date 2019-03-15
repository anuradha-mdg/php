<?php session_start();?>
<?php if(isset($_SESSION["username"])){?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</style>
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
  <h1>Update</h1>

	<?php
include("connect.php");
$id = $_GET['id'];
$sql = "SELECT * FROM user where id =$id";
$result = mysqli_query($con,$sql);
?>

  <table>
<form action="update_db.php" method="post">
<?php
if(mysqli_num_rows($result) >0)
{
	while($row = mysqli_fetch_array($result)){
?>
<tr>
	<td>Name: </td><td><input type="text" name="username" value="<?php echo $row['username']?>"></td>
</tr>
<tr>
	<td>Password </td><td><input type="password" name="password" value="<?php echo $row['password']?>"></td>
</tr>
<tr>
    
	<td>Gender </td><td>
	<?php if($row['gender'] == "female"){?>
	<input type="radio" name="gender" value="Female" checked>Female <input type="radio" name="gender" value="Male">Male
	<?php }else{?>
	<input type="radio" name="gender" value="Female" checked>Female<input type="radio" name="gender" value="Male" checked >Male
	<?php } ?>
	</td>

</tr>
<tr>
	<td>Education </td><td><select name="education">
		<?php 
			$edu = $row['education'];
			switch($edu)
			{
	           case "M.Tech":
						echo"<option value='M.Tech' selected>M.Tech</option>";
						echo '<option value="MCA">MCA</option>';
						echo '<option value="B.Tech">B.Tech</option>';
						break;
				case "MCA":
						echo '<option value="MCA" selected>MCA</option>';
						echo"<option value='M.Tech' >M.Tech</option>";
						echo '<option value="B.Tech">B.Tech</option>';
						break;
				case "B.Tech":
					    echo '<option value="B.Tech" selected>B.Tech</option>';
						echo"<option value='M.Tech' >M.Tech</option>";
						echo '<option value="MCA">MCA</option>';
						
						break;
			}
?>
	</select></td>
</tr>
<tr>
	<td>Address </td><td><textarea name="address" rows="5" cols="20"><?php echo $row['address']?></textarea></td>
<input type="hidden" value="<?php echo $row['id']?>" name="id">
</tr>
<tr>
	<td colspan="2">&nbsp;</td>
	
	
     
</tr>
<tr>
	<td><input type="submit" value="Submit"></td>
	<td><input type="reset" value="Cancel"></td>
	
   <?php  }
}?>  
</tr>

</form>
</table>

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