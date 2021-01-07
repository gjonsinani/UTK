<html>
<head>
	<title>Shto te dhënat</title>
</head>
<body>
<?php

include_once("config.php");

if(isset($_POST['shtoKontakt'])) {	
	$emri = $_POST['Emri'];
	$email = $_POST['Email'];
	$tel = $_POST['Tel'];
	$mesazhi = $_POST['Mesazhi'];
	
		
	// checking empty fields
	if(empty($emri) || empty($email) || empty($tel) || empty($mesazhi)) {			
		if(empty($emri)) {echo "<font color='red'>Emri është i zbrazët.</font><br/>";}
		if(empty($email)) {echo "<font color='red'>Email është i zbrazët.</font><br/>";}
		if(empty($tel)) {echo "<font color='red'>Nr. i telefonit është i zbrazët.</font><br/>";}
		if(empty($mesazhi)) {echo "<font color='red'>Mesazhi është i zbrazët.</font><br/>";}
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		$result = mysqli_query($conn, "CALL shtoKontakt('$emri','$email','$tel','$mesazhi');");
		echo "<script>
         setTimeout(function(){
            window.location.href = 'kontakt.php';
         }, 5000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 5 sekonda. <b></p>";
	
	}
}
?>
</body>
</html>