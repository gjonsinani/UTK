<?php
include("config.php");

$ID_Komuna = $_GET['ID_Komuna'];

$result = mysqli_query($conn,"CALL deleteKomune('$ID_Komuna')");

header("Location:menaxhokomunat.php");
?>
