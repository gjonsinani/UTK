<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['add_user'])) {	
	$username = $_POST['username'];
	$password = $_POST['password'];
	

	{ 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($conn, "INSERT INTO users (username, password) VALUES('$username','$password')");
		
		//display success messPershkrimi
		?>
		<script>
		alert('Perdoruesi u shtua me sukses!');
        window.location.href='users.php';
        </script>
		<?php
	}
}
?>