<?php
//including the database connection file
include("config.php");

//getting uid of the data from url
$id_rrk = $_GET['id_rrk'];

//deleting the row from table
$result = mysqli_query($conn,"DELETE FROM rrethkosoves WHERE id_rrk=$id_rrk");

//redirecting to the display page (index.php in our case)
header("Location:fshij_rreth_kosoves.php");
?> 