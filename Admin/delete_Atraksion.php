<?php
include("config.php");

$ID_Atraksioni = $_GET['ID_Atraksioni'];

$result = mysqli_query($conn,"DELETE FROM atraksionet WHERE ID_Atraksioni=$ID_Atraksioni");

header("Location:fshi_atraksion.php");
?>
