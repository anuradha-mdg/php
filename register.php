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
  <h1>Register</h1>
  <table>
<form action="register_db.php" method="post">
<tr>
	<td>Name: </td><td><input type="text" name="username" required></td>
</tr>
<tr>
	<td>Password </td><td><input type="password" name="password" required></td>
</tr>
<tr>
	<td>Gender </td><td><input type="radio" name="gender" value="Female" required>Female <input type="radio" name="gender" value="Male">Male</td>
</tr>
<tr>
	<td>Education </td><td><select name="education" required>
	     <option></option>
		<option value="M.Tech">M.Tech</option>
		<option value="MCA">MCA</option>
		<option value="B.Tech">B.Tech</option>

	</select></td>
</tr>
<tr>
	<td>Address </td><td><textarea name="address" rows="5" cols="20" required></textarea></td>
</tr>
<tr>
	<td colspan="2">&nbsp;</td>
	
	
     
</tr>
<tr>
	<td><input type="submit" value="Submit"></td>
	<td><input type="reset" value="Cancel"></td>
	
     
</tr>
</form>
</table>

</article>

<footer>Copyright &copy; 2018</footer>


</div>

</body>
</html>
