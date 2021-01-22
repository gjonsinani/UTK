<?php
// including the database connection file
include("header.php");
include_once("config.php");

if (isset($_POST['update_user'])) {
	$uid = $_POST['uid'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = MD5($_POST['password']);
	// {
	// 	//updating the table
	// 	$result = mysqli_query($conn, "UPDATE users SET username='$username', email='$email', password=MD5('$password')  WHERE uid=$uid");

	// 	//redirectig to the display message. In our case, it is home.php
	// 	header("Location: users.php");
	// }
	if (empty($username) || empty($email) || empty($password)) {

		if (empty($username)) {
			echo "<font color='red'>Username field is empty.</font><br/>";
		}

		if (empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		if (empty($password)) {
			echo "<font color='red'>Password field is empty.</font><br/>";
		}
	} else {
		//updating the table
		mysqli_query($conn, "SET @uid = ${uid}");
		mysqli_query($conn, "SET @username = '${username}'");
		mysqli_query($conn, "SET @email = '${email}'");
		mysqli_query($conn, "SET @password = '${password}'");
		$result = mysqli_query($conn, "CALL updateUser(@uid,@username,@email,@password)");
		if ($result) {
			//redirectig to the display pProgrami. In our case, it is admin.php
			header("Location: users.php");
		} else {
			die("Coudn't execute update procedure!");
		}
	}
}
?>
<?php
//getting id_footer from url
$uid = $_GET['uid'];

//selecting data associated with this particular id_footer
$result = mysqli_query($conn, "SELECT * FROM users WHERE uid=$uid");

while ($res = mysqli_fetch_array($result)) {
	$username = $res['username'];
	$password = $res['password'];
	$email = $res['email'];
}
?>
<div class="container">
	<form class=" footer-bottom " enctype="multipart/form-data" name="form1" method="post" action="update_user.php">

		<div class="choose" style="border:solid #526069 1px;">
			<h3 style="background-color:#526069;">Forma për Menaxhimin e Perdoruesvet</h3>
			<div class="container">
				<div style="width:80%; text-align:center; margin:5% auto 2% auto;">

					<table class="table table-responsive">
						<tbody>
							<tr>
								<td style="font-weight:bold; color:black;text-align: right;">Perdoruesi: </td>
								<td><input type="text" name="username" class="form-control" value="<?php echo $username; ?>" /></td>
							</tr>
							<tr>
								<td style="font-weight:bold; color:black;text-align: right;">Email: </td>
								<td><input type="email" name="email" class="form-control" value="<?php echo $email; ?>" /></td>
							</tr>
							<tr>
								<td style="font-weight:bold; color:black;text-align: right;">Fjalekalimi: </td>
								<td><input type="text" name="password" class="form-control" value="<?php echo $password; ?>" /></td>
							</tr>

						</tbody>
					</table>
					<input type="hidden" name="uid" value='<?php echo $_GET['uid']; ?>' />
					<input class="contact-but-blue" type="submit" name="update_user" value="Modifiko" />
					<div>

	</form>
</div>


<div class="clearfix"></div>
</div>


</div>
</div>


<?php
include("footer.php");
?>