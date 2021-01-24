<html>
<head>
	<title>Shto te dhënat</title>
</head>
<body>
<?php

include_once("config.php");

if(isset($_POST['shtoAtraksion'])) {	
	$emri = $_POST['Emri'];
	
		
	// checking empty fields
	if(empty($emri)) {			
		if(empty($emri)) {echo "<font color='red'>Emri është i zbrazët.</font><br/>";}
		
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";

	} else { 
		$result = mysqli_query($conn, "INSERT INTO atraksionet(Atraksioni)VALUES('$emri')");
		echo "<script>
         setTimeout(function(){
            window.location.href = 'pikat_turistike.php';
         }, 5000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 5 sekonda. <b></p>";
	
	}
}
?>
</body>
</html>