<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['add_rreth_kosoves'])) {	
	$pershkrimi = $_POST['pershkrimi'];
	$ikona = $_POST['ikona'];
	

	{ 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($conn, "INSERT INTO rrethkosoves (pershkrimi, ikona) VALUES('$pershkrimi','$ikona')");
		
		//display success messPershkrimi
		?>
		<script>
		alert('Ikona informuese juaj u shtua me sukses');
        window.location.href='rreth_kosoves.php';
        </script>
		<?php
	}
}