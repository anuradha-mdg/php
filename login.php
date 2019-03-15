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
  <h1>Login</h1>
  <table>
<form action="validate.php" method="post">
<?php if(isset($_GET["msg"])){?>
<tr>
	<td style="color:red" colspan="2">Invalid username/password</td>
</tr>
<?php }?>
<tr>
	<td>Name: </td><td><input type="text" name="username" required autofocus></td>
</tr>
<tr>
	<td>Password </td><td><input type="password" name="password" required></td>
</tr>
<tr>
	<td><input type="submit" value="submit"></td>
	<td><a href="register.php">Signup!</a></td>
     
</tr>
</form>
</table>

</article>

<footer>Copyright &copy; 2018</footer>


</div>

</body>
</html>
