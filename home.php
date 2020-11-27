<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("check.php");	
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
</head>
<body>
<h3 class="hello" style="text-align:center">Pershendetje, <em><?php echo $login_user;?>!</em></h3>
<br><br><br>
	<a href="admin.php" style="font-size:1rem">Users</a> 
	<br /> <br />
	<a href="admin.php" style="font-size:1rem">Departments</a> 
	<br /> <br />
	<a href="admin.php" style="font-size:1rem">Students</a> 
	<br /> <br />
	<a href="logout.php" style="font-size:1rem">Logout</a>
</body>
</html>