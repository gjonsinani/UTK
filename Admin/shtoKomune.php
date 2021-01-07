<html>
<head>
	<title>Shto te dhënat</title>
</head>
<body>
<?php

include_once("config.php");
$msg = ""; 

if(isset($_POST['submit'])) {	
	$emriKomunes = $_POST['EmriKomunes'];
	//$Emblema = addslashes(file_get_contents($_FILES['Emblema']['tmp_name']));; 
  $imgData =addslashes (file_get_contents($_FILES['Emblema']['tmp_name']));
	$Emblema = $_FILES['Emblema']['name'];
	
	 $maxsize = 10000000; //set to approx 10 MB

	//$image =addslashes (file_get_contents($_FILES['userfile']['tmp_name']));
	//$name = $_FILES['userfile']['name']
	//$name = $_FILES['image']['name'];
	
	// $maxsize = 10000000; //set to approx 10 MB
	
    // checking empty fields
	if(empty($emriKomunes) || empty($Emblema)) {			
		if(empty($emriKomunes)) {echo "<font color='red'>Emri i Komunes është i zbrazët.</font><br/>";}
		if(empty($Emblema)) {echo "<font color='red'>Emblema është i zbrazët.</font><br/>";}
		 "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
	$result = mysqli_query($conn, "CALL shtoKomune('$emriKomunes','$Emblema', '$imgData')");
		echo "<script>
         setTimeout(function(){
            window.location.href = 'menaxhokomunat.php';
         }, 5000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 5 sekonda. <b></p>";
		  
     
	
	}
	
}
?>
</body>
</html>