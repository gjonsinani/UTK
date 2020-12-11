
<?php
/* Index.php faqja qe permban formen e loginit) */
	include('login.php'); // perfshine scripten login
	if ((isset($_SESSION['username']) != '')) 
	{
		header('Location: home.php');
	}	
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Turizmi në Kosovë</title>
</head>
<body>
<div align="left">
<h4>Login</h4>
<div class="loginBox">
    <form method="post" action="">
	   <label>Username:</label>
        <input type="text" name="username" placeholder="username" /><br><br>
        <label>Password:</label>
        <input type="password" name="password" placeholder="password" />  <br><br>
       &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
	   <input type="submit" name="submit" value="Login" /> 
    </form>
    <div class="error"><?php echo $error;?></div>
</div>
	<a href="index.php" style="font-size:18px">Home</a> 
	<br /> <br />
</div>
</body>
</html>