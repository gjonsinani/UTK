<?php
//including the database connection file
include_once("config.php");

if (isset($_POST['add_menu'])) {
	$emri = $_POST['emri'];
	$link = $_POST['link'];{
		// if all the fields are filled (not empty) 
		$result = mysqli_query($conn, "CALL insertMenu('$emri', '$link')");

		//display success messPershkrimi
?>
		<script>
			alert('Menyja juaj u shtua me sukses!');
			window.location.href = 'home.php';
		</script>
<?php
	}
}
?>