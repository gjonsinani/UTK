<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['add_rreth_kosoves'])) {	
    $ikona = $_POST['ikona'];
    $titulli = $_POST['titulli'];
	$pershkrimi = $_POST['pershkrimi'];



	{ 
		// if all the fields are filled (not empty) 

		//insert data to database	
		$result = mysqli_query($conn, "INSERT INTO rrethkosoves ( ikona, titulli, pershkrimi) VALUES('$ikona', '$titulli', '$pershkrimi')");

		//display success messPershkrimi
		?>
		<script>
		alert('Ikona informuese juaj u shtua me sukses');
        window.location.href='rreth_kosoves.php';
        </script>
		<?php
	}
}