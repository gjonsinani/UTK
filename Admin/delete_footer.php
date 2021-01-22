<?php
//including the database connection file
include("config.php");

//getting uid of the data from url
$p_id_footer = $_GET['id_footer'];

//deleting the row from table
$result = mysqli_query($conn,"CALL deleteFooter('$p_id_footer')");

// $result = mysqli_query($conn,"DELETE FROM footer WHERE id_footer=$id_footer");

//redirecting to the display page (index.php in our case)
header("Location:fshij_footer.php");
?>