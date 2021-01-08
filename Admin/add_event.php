




<?php
include('config.php');

if(isset($_POST['add_event'])) {	
	$TitulliEventit = $_POST['TitulliEventit'];
	$PershkrimiEventit = $_POST['PershkrimiEventit'];
	$DataEventit = $_POST['DataEventit'];
	$ID_Komuna = $_POST['ID_Komuna'];
	$LlojiEventit = $_POST['LlojiEventit'];
	
	
	
  $total = count($_FILES['images']['tmp_name']);
  $total==$total+1;
  for($i=0;$i<$total;$i++){
  	if($i===1){
  	$fileName1 = $_FILES['images']['name'][$i];
    $ext = pathinfo($fileName1, PATHINFO_EXTENSION);
    $fileDest1 = 'images/'.$fileName1.'.'.$ext;
    if($ext === 'pdf' || 'jpeg' || 'JPG'){
        move_uploaded_file($_FILES['images']['tmp_name'][$i], $fileDest1);
    }else{
      echo 'Pdfs and jpegs only please';
    }

  	}
  	if ($i===2) {
  	$fileName2 = $_FILES['images']['name'][$i];
    $ext = pathinfo($fileName2, PATHINFO_EXTENSION);
    $fileDest2 = 'images/'.$fileName2.'.'.$ext;
    if($ext === 'pdf' || 'jpeg' || 'JPG'){
        move_uploaded_file($_FILES['images']['tmp_name'][$i], $fileDest2);
    }else{
      echo 'Pdfs and jpegs only please';
    }

  	}
  	if ($i===3) {
  	$fileName3 = $_FILES['images']['name'][$i];
    $ext = pathinfo($fileName3, PATHINFO_EXTENSION);
    $fileDest3 = 'images/'.$fileName3.'.'.$ext;
    if($ext === 'pdf' || 'jpeg' || 'JPG'){
        move_uploaded_file($_FILES['images']['tmp_name'][$i], $fileDest3);
    }else{
      echo 'Pdfs and jpegs only please';
    }
    
  	}
  	else{
    $fileName4 = $_FILES['images']['name'][$i];
    $ext = pathinfo($fileName4, PATHINFO_EXTENSION);
    $fileDest4 = 'images/'.$fileName4.'.'.$ext;
    if($ext === 'pdf' || 'jpeg' || 'JPG'){
        move_uploaded_file($_FILES['images']['tmp_name'][$i], $fileDest4);
    }else{
      echo 'Pdfs and jpegs only please';
    }
    
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
		$result = mysqli_query($conn, "INSERT INTO eventet(TitulliEventit,PershkrimiEventit,DataEventit, ID_Komuna, LlojiEventit,Foto1,Foto2,Foto3,Foto4) VALUES('$TitulliEventit','$PershkrimiEventit','$DataEventit','$ID_Komuna','$LlojiEventit','$fileDest1','$fileDest2','$fileDest3','$fileDest4')");
		
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
