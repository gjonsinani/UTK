<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['add_rreth_kosoves'])) {	
    $ikona = $_POST['ikona'];
    $titulli = $_POST['titulli'];
	$pershkrimi = $_POST['pershkrimi'];
	$imgData =addslashes (file_get_contents($_FILES['userfile']['tmp_name']));
	$name = $_FILES['userfile']['name'];
	
	 $maxsize = 10000000; //set to approx 10 MB




	{ 
		// if all the fields are filled (not empty) 

		//insert data to database	
		$result = mysqli_query($conn, "INSERT INTO rrethkosoves ( ikona, titulli, pershkrimi, images, name) VALUES('$ikona', '$titulli', '$pershkrimi', '$imgData', '$name')");

		//display success messPershkrimi
		?><script>
		setTimeout(function(){
		   window.location.href = 'rreth_kosoves.php';
		}, 5000);
	 </script>"
		<script>
		alert('Ikona informuese juaj u shtua me sukses');
        window.location.href='rreth_kosoves.php';
        </script>
		<?php
	}
}