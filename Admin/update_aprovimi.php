<?php include_once("config.php");

	

	$ID_pikaT = $_GET['ID_pikaT'];
	$result = mysqli_query($conn,"UPDATE pikatturistike SET Aprovimi='PO' WHERE ID_pikaT=$ID_pikaT");
	header("Location: modifiko_pikeT.php");
	
?>