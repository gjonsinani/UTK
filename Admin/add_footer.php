<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['add_footer'])) {	
	$pershkrimi = $_POST['pershkrimi'];
	$ikonat = $_POST['ikonat'];
	

	{ 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($conn, "INSERT INTO footer (pershkrimi, ikonat) VALUES('$pershkrimi','$ikonat')");
		
		//display success messPershkrimi
		?>
		<script>
		alert('Footeri juaj u shtua me sukses');
        window.location.href='home.php';
        </script>
		<?php
	}
}
?>
