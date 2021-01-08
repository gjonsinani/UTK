




<?php
include('config.php');

if(isset($_POST['add_event'])) {	
	$TitulliEventit = $_POST['TitulliEventit'];
	$PershkrimiEventit = $_POST['PershkrimiEventit'];
	$DataEventit = $_POST['DataEventit'];
	$ID_Komuna = $_POST['ID_Komuna'];
	$LlojiEventit = $_POST['LlojiEventit'];
	
	
	
  $total = count($_FILES['images']['tmp_name']);
  for($i=0;$i<$total;$i++){
    $fileName = $_FILES['images']['name'][$i];
    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $newFileName = md5(uniqid());
    $fileDest = 'images/'.$newFileName.'.'.$ext;
    if($ext === 'pdf' || 'jpeg' || 'JPG'){
        move_uploaded_file($_FILES['images']['tmp_name'][$i], $fileDest);
    }else{
      echo 'Pdfs and jpegs only please';
    }
  }

	

	
	
	// checking empty fields
	if(empty($TitulliEventit) || empty($PershkrimiEventit)|| empty($DataEventit) || empty($LlojiEventit)) {
				
		if(empty($TitulliEventit)) {
			echo "<font color='red'>Emri field is empty.</font><br/>";
		}
		
		if(empty($PershkrimiEventit)) {
			echo "<font color='red'>Mbiemri field is empty.</font><br/>";
		}
		
		if(empty($DataEventit)) {
			echo "<font color='red'>Datelindja field is empty.</font><br/>";
		}
		if(empty($LlojiEventit)) {
			echo "<font color='red'>Adresa field is empty.</font><br/>";
		}
		
		//link to the previous pMbiemri
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($conn, "INSERT INTO eventet(TitulliEventit,PershkrimiEventit,DataEventit, ID_Komuna, LlojiEventit,Foto) VALUES('$TitulliEventit','$PershkrimiEventit','$DataEventit','$ID_Komuna','$LlojiEventit','$newFileName')");
		
		//display success message
			echo "<script>
         setTimeout(function(){
            window.location.href = 'manageevents.php';
         }, 5000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 5 sekonda. <b></p>";
		 
		//echo "<font color='green'>Data added successfully.";
		//echo "<br/><a href='ballina.php'>View Result</a>";
	}
}
?>

</body>
</html>
