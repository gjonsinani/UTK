<?php
include("config.php");

$ID_Eventi = $_GET['ID_Eventi'];

$result = mysqli_query($conn,"CALL deleteEvent('$ID_Eventi')");

echo "<script>
         setTimeout(function(){
            window.location.href = 'manageevents.php';
         }, 5000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u fshire ne sistem. Ju lutem pritni 5 sekonda. <b></p>";
?>
