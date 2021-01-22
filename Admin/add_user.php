<?php
//including the database connection file
include_once("config.php");

if (isset($_POST['add_user'])) {
	$username = $_POST['username'];
	$password = MD5($_POST['password']);
	$email = $_POST['email']; 
	
	if(empty($username) || empty($email) || empty($password)) {
				
		if(empty($username)) {
			echo "<font color='red'>Username field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		if(empty($password)) {
			echo "<font color='red'>Password field is empty.</font><br/>";
		}
		
		//link to the previous pProgrami
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($conn, "CALL insertUser('$username','$email','$password')");
		
		//display success messProgrami
		// echo "<font color='green'>Data added successfully.";
		// echo "<br/><a href='admin.php'>View Result</a>";
	// {
	// 	// if all the fields are filled (not empty) 
	// 	//insert data to database	
	// 	$result = mysqli_query($conn, "INSERT INTO users (username, password, email) VALUES('$username',MD5('$password'),'$email')");
	// 	//display success messPershkrimi
?>
		<script>
			alert('Perdoruesi u shtua me sukses!');
			window.location.href = 'users.php';
		</script>
<?php
	}
}
?>