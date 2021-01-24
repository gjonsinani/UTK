<?php
//including the database connection file
include("config.php");

//getting uid of the data from url
$p_id_menu = $_GET['id_menu'];

//deleting the row from table
$result = mysqli_query($conn,"CALL deleteMenu('$p_id_menu')");


//redirecting to the display page (index.php in our case)
header("Location:home.php");
?>