<?php
//including the database connection file
include("config.php");

//getting uid of the data from url
$uid = $_GET['uid'];

//deleting the row from table
$result = mysqli_query($conn,"DELETE FROM users WHERE uid=$uid");

//redirecting to the display page (index.php in our case)
header("Location:fshij_user.php");
?>