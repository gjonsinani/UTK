<?php
include("config.php");

$ID_Kontakti = $_GET['ID_Kontakti'];

$result = mysqli_query($conn,"CALL deleteKontakt('$ID_Kontakti')");

header("Location:kontakt.php");
?>
