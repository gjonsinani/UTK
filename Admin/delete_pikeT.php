<?php
include("config.php");

$ID_pikaT = $_GET['ID_pikaT'];

$result = mysqli_query($conn,"DELETE FROM pikatturistike WHERE ID_pikaT=$ID_pikaT");

header("Location:fshi_pikeT.php");
?>
