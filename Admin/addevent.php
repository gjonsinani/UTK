<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->





<?php

include('configpdo.php');

if(isset($_REQUEST['addevent'])) {	

//////////////////////////////


  try
  {
    $TitulliEventit = $_REQUEST['TitulliEventit'];
  $PershkrimiEventit = $_REQUEST['PershkrimiEventit'];
  $DataEventit = $_REQUEST['DataEventit'];
  $ID_Komuna = $_REQUEST['ID_Komuna'];
  $LlojiEventit = $_REQUEST['LlojiEventit'];

    $image_file1 = $_FILES["file1"]["name"];
    $type1   = $_FILES["file1"]["type"];  //file name "txt_file"  
    $size1   = $_FILES["file1"]["size"];
    $temp1  = $_FILES["file1"]["tmp_name"];

    $image_file2  = $_FILES["file2"]["name"];
    $type2    = $_FILES["file2"]["type"]; //file name "txt_file"  
    $size2    = $_FILES["file2"]["size"];
    $temp2    = $_FILES["file2"]["tmp_name"];
    
    $image_file3  = $_FILES["file3"]["name"];
    $type3    = $_FILES["file3"]["type"]; //file name "txt_file"  
    $size3    = $_FILES["file3"]["size"];
    $temp3    = $_FILES["file3"]["tmp_name"];

    $image_file4  = $_FILES["file4"]["name"];
    $type4    = $_FILES["file4"]["type"]; //file name "txt_file"  
    $size4    = $_FILES["file4"]["size"];
    $temp4    = $_FILES["file4"]["tmp_name"];

    $path1="upload/".$image_file1; //set upload folder path
    $path2="upload/".$image_file2; //set upload folder path
    $path3="upload/".$image_file3; //set upload folder path
    $path4="upload/".$image_file4; //set upload folder path
    
   
    
    
    if(empty($image_file1 && $image_file2 && $image_file3 && $image_file4)){
      $errorMsg="Ju lutem Ngarkoni nje foto";
    }
    else if($type1=="image/jpg" || $type1=='image/jpeg' || $type1=='image/png' || $type1=='image/gif') //check file extension
    { 
      if(!file_exists($path1) && !file_exists($path2) && !file_exists($path3) && !file_exists($path4)) //check file not exist in your upload folder path
      {
        if($size1< 5000000 && $size2 < 5000000 && $size3< 5000000 && $size4 < 5000000) //check file size 5MB
        {

          move_uploaded_file($temp1, "upload/" .$image_file1); //move upload file temperory directory to your upload folder
          move_uploaded_file($temp2, "upload/" .$image_file2); //move upload file temperory directory to your upload folder
           move_uploaded_file($temp3, "upload/" .$image_file3); //move upload file temperory directory to your upload folder
          move_uploaded_file($temp4, "upload/" .$image_file4); //move upload file temperory directory to your upload folder
        }
        else
        {
          $errorMsg="Fotoja eshte me e madhe se 5 MB, ju lutem ngarkoni foto qe eshte me e vogel se 5MB"; //error message file size not large than 5MB
        }
      }
      else
      { 
        $errorMsg="Njera nga fotot egziston, ju lutem ngarkoni foto qe nuk egzistojne ne folder, kontrolloni folderin"; //error message file not exists your upload folder path
      }
    }
    else
    {
      $errorMsg="Ngarkoni vetem foto te formatit : JPG , JPEG , PNG & GIF .....Kontrolloni formatin e fotove"; //error message file extension
    }
    
    if(!isset($errorMsg))
    {
    

      $insert_stmt=$db->prepare("INSERT INTO eventet(TitulliEventit,PershkrimiEventit,DataEventit, ID_Komuna, LlojiEventit,Foto1,Foto2,Foto3,Foto4) VALUES(:TitulliEventit,:PershkrimiEventit,:DataEventit,:ID_Komuna,:LlojiEventit,:file1,:file2,:file3,:file4)"); //sql insert query 

      $insert_stmt->bindParam(':TitulliEventit',$TitulliEventit);
      $insert_stmt->bindParam(':PershkrimiEventit',$PershkrimiEventit);
      $insert_stmt->bindParam(':DataEventit',$DataEventit);
      $insert_stmt->bindParam(':ID_Komuna',$ID_Komuna); 
      $insert_stmt->bindParam(':LlojiEventit',$LlojiEventit);                 
      $insert_stmt->bindParam(':file1',$image_file1);
      $insert_stmt->bindParam(':file2',$image_file2);
      $insert_stmt->bindParam(':file3',$image_file3);
      $insert_stmt->bindParam(':file4',$image_file4);

          //bind all parameter 
    
      if($insert_stmt->execute())
      {
        $insertMsg="Fotot jane ngarkuar me Sukses! ........"; //execute query success message
        header("refresh:5;manageevents.php"); //refresh 3 second and redirect to index.php page
      }
    }
  }
  catch(PDOException $e)
  {
    echo $e->getMessage();
  }




////////////////////////////////

}
?>




<head>
  <title>Add Event - Events Managements</title>
</head>

<?php 
include("header.php");
?>

<div class="container">	
	<div class="choose d-choose">
		<h3 class="t-h3">Forma për Shtimin e Eventeve</h3>
           <div class="container">
           	<div class="div-form">
           		<?php
		if(isset($errorMsg))
		{
			?>
            <div class="alert alert-danger">
            	<strong>GABIM ! <?php echo $errorMsg; ?></strong>
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





           		  <form action="addevent.php" method="post" enctype="multipart/form-data">

           			<div class="table-responsive">
           				<table class="table">
           					<tbody>
           						
           						<tr>
           							<td class="t-td">Titulli i Eventit: </td>
           						<td><input class="form-control" type="text" name="TitulliEventit" required="" oninvalid="this.setCustomValidity('Ju lutem Plotesoni Titullin e Eventit')" oninput="setCustomValidity('')"/></td>
           						</tr>

           						<tr>
           							<td class="t-td">Përshkrimi i Eventit: </td>
                           <td><textarea class="form-control txt-area" name="PershkrimiEventit" rows="10" required="" oninvalid="this.setCustomValidity('Ju lutem Plotesoni Pershkrimin e Eventit')" oninput="setCustomValidity('')"></textarea></td>
           						</tr>

           						<tr>
           							<td class="t-td">Data e Eventit: </td>
           							<td><input class="form-control" type="date" name="DataEventit" required="" oninvalid="this.setCustomValidity('Ju lutem Plotesoni Daten e Eventit')" oninput="setCustomValidity('')"/></td>
           						</tr>

           						<tr>
                                <td class="t-td" >Komuna:</td>
                             <td><select class="form-control" name="ID_Komuna" required="" oninvalid="this.setCustomValidity('Ju lutem Zgjedhni Komunen e Eventit')" oninput="setCustomValidity('')">
                                <option value="">Zgjedh Komunën</option>
                                <?php
                                        $res=mysqli_query($conn,"SELECT * FROM komunat");
                                        while($row=$res->fetch_array())
                                        {
                                            ?>
                                            <option value="<?php echo $row['ID_Komuna']; ?>"><?php echo $row['EmriKomunes']; ?></option>
                                            <?php
                                        }
                                        ?>
                                 </select>
                            </td>                                
                            </tr>

						        
           						<tr>
           							<td class="t-td">Lloji i Eventit: </td>
           							<td><input class="form-control" type="text" name="LlojiEventit" required="" oninvalid="this.setCustomValidity('Ju lutem Plotesoni Llojin e Eventit')" oninput="setCustomValidity('')"/></td>
           						</tr>
						         
						         <tr>
						         	

                
                                  	<td class="t-td">Ngarko Foto: </td>
                                  	

                                     
    
                                  	<td>
                          
                                    
                                       <input type="file"  name="file1"  multiple="multiple" />
                                       <br>
                                       <input type="file"  name="file2"  multiple="multiple" />
                                       <br>
                                       <input type="file"  name="file3"  multiple="multiple" />
                                       <br>
                                       <input type="file"  name="file4"  multiple="multiple" />

                                     <p class="help-block" style="text-align: left">Ju mund te ngarkoni deri ne 4 foto.</p>
                                     
                                    
                                    </td>
                                
                                </tr>
                            </tbody>
                            
                    </table>
                    </div>                   
                    <div >
                        <form>
                            <input class="contact-but-blue" type="submit" value="Shto" name="addevent" />
                        </form>
                    </div>
                
                </form>
                <div class="clearfix"></div>
			</div>
			
		 
	 </div>
</div>
		 	 
	


<?php
include 'footer.php';
?>