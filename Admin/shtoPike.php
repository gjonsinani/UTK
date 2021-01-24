<?php

require_once "connection.php";

if(isset($_REQUEST['Shto']))
{
	try
	{
		$emri	= $_REQUEST['emri-pika'];	//textbox name "txt_name"
		$ID_Atraksioni	= $_REQUEST['ID_Atraksioni'];
		$ID_Komuna	= $_REQUEST['ID_Komuna'];
		$lokacioni	= $_REQUEST['lokacioni'];
		$pershkrimi	= $_REQUEST['pershkrimi'];
		$aprovim ='PO';

		$image_file1	= $_FILES["foto1"]["name"];
		$type1		= $_FILES["foto1"]["type"];	//file name "txt_file"	
		$size1		= $_FILES["foto1"]["size"];
		$temp1		= $_FILES["foto1"]["tmp_name"];

		$image_file2	= $_FILES["foto2"]["name"];
		$type2		= $_FILES["foto2"]["type"];	//file name "txt_file"	
		$size2		= $_FILES["foto2"]["size"];
		$temp2		= $_FILES["foto2"]["tmp_name"];

		$image_file3	= $_FILES["foto3"]["name"];
		$type3		= $_FILES["foto3"]["type"];	//file name "txt_file"	
		$size3		= $_FILES["foto3"]["size"];
		$temp3		= $_FILES["foto3"]["tmp_name"];
		
		$image_file4	= $_FILES["foto4"]["name"];
		$type4		= $_FILES["foto4"]["type"];	//file name "txt_file"	
		$size4		= $_FILES["foto4"]["size"];
		$temp4		= $_FILES["foto4"]["tmp_name"];

		$path1="upload/".$image_file1;
		$path2="upload/".$image_file2;
		$path3="upload/".$image_file3;
		$path4="upload/".$image_file4; //set upload folder path
		
		if(empty($emri)|| empty($ID_Atraksioni)|| empty($ID_Komuna)|| empty($lokacioni)|| empty($pershkrimi)){
			if(empty($emri)) {
			echo "<font color='red'>Emri është e zbrasët.</font><br/>";
		}
		if(empty($ID_Atraksioni)) {
			echo "<font color='red'>Atraksioni është e zbrasët.</font><br/>";
		}
		if(empty($ID_Komuna)) {
			echo "<font color='red'>Komuna është e zbrasët.</font><br/>";
		}
		if(empty($lokacioni)) {
			echo "<font color='red'>Lokacinoni është e zbrasët.</font><br/>";
		}
		if(empty($pershkrimi)) {
			echo "<font color='red'>Pershkrimi është e zbrasët.</font><br/>";
		}
	}
		else if(empty($image_file1)){
			$errorMsg="Ju lutem caktoni te paktën një foto";
		}
		else if(($type1=="image/jpg" || $type1=='image/jpeg' || $type1=='image/png' || $type1=='image/gif') ||
		($type2=="image/jpg" || $type2=='image/jpeg' || $type2=='image/png' || $type2=='image/gif') ||
		($type3=="image/jpg" || $type3=='image/jpeg' || $type3=='image/png' || $type3=='image/gif')||
		($type4=="image/jpg" || $type4=='image/jpeg' || $type4=='image/png' || $type4=='image/gif')) //check file extension
		{	
			if(!file_exists($path1) || !file_exists($path2)|| !file_exists($path3)|| !file_exists($path4)) //check file not exist in your upload folder path
			{
				if($size1 < 5000000 || $size2 < 5000000 || $size3 < 5000000 || $size4 < 5000000) //check file size 5MB
				{
					move_uploaded_file($temp1, "upload/" .$image_file1); //move upload file temperory directory to your upload folder
					move_uploaded_file($temp2, "upload/" .$image_file2);
					move_uploaded_file($temp3, "upload/" .$image_file3);
					move_uploaded_file($temp4, "upload/" .$image_file4);
				}
				else
				{
					$errorMsg="Filet tua kalojn limitin prej 5MB"; //error message file size not large than 5MB
				}
			}
			else
			{	
				$errorMsg="Filet e tua ekzistojnë në serverin tonë"; //error message file not exists your upload folder path
			}
		}
		else
		{
			$errorMsg="Vetem JPG , JPEG , PNG & GIF formatet e files....."; //error message file extension
		}
		
		if(!isset($errorMsg))
		{
			$insert_stmt=$db->prepare('INSERT INTO pikatturistike(Emri,ID_Komuna,ID_Atraksioni,Pershkrimi,Foto1,Foto2,Foto3,Foto4,Lokacioni,Aprovimi) VALUES(:fname,:fkomuna,:fatraksioni,:fpershkrimi,:ffoto1,:ffoto2,:ffoto3,:ffoto4,:lokacioni,:faprovim)'); //sql insert query					
			$insert_stmt->bindParam(':fname',$emri);	
			$insert_stmt->bindParam(':fkomuna',$ID_Komuna);
			$insert_stmt->bindParam(':fatraksioni',$ID_Atraksioni);
			$insert_stmt->bindParam(':fpershkrimi',$pershkrimi);
			$insert_stmt->bindParam(':ffoto1',$image_file1);
			$insert_stmt->bindParam(':ffoto2',$image_file2);
			$insert_stmt->bindParam(':ffoto3',$image_file3);
			$insert_stmt->bindParam(':ffoto4',$image_file4);
			$insert_stmt->bindParam(':lokacioni',$lokacioni);
			$insert_stmt->bindParam(':faprovim',$aprovim);	  //bind all parameter 
		
			if($insert_stmt->execute())
			{
				$insertMsg="Procesi u krye me sukses........"; //execute query success message
				header("refresh:3;pikat_turistike.php"); //refresh 3 second and redirect to index.php page
			}
		}
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
}

?>
<body>
	<div class="wrapper">
		<div class="container">
			<div class="col-lg-12">
				<?php
				if(isset($errorMsg))
				{
					?>
		            <div class="alert alert-danger">
		            	<strong>Gabim ! <?php echo $errorMsg; ?></strong>
		            </div>
		            <?php
				}
				if(isset($insertMsg)){
				?>
					<div class="alert alert-success">
						<strong>Sukses ! <?php echo $insertMsg; ?></strong>
					</div>
		        <?php
				}
				?>
			</div>
		</div>
	</div>
</body>