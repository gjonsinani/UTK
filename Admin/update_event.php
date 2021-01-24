<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php

require_once "configpdo.php";

if(isset($_REQUEST['ID_Eventi']))
{
    try
    {
        $id = $_REQUEST['ID_Eventi']; //get "update_id" from index.php page through anchor tag operation and store in "$id" variable
        $select_stmt = $db->prepare('SELECT * FROM eventet WHERE ID_Eventi =:id'); //sql select query
        $select_stmt->bindParam(':id',$id);
        $select_stmt->execute(); 
        $row = $select_stmt->fetch(PDO::FETCH_ASSOC);
        extract($row);
    }
    catch(PDOException $e)
    {
        $e->getMessage();
    }
    
}

if(isset($_REQUEST['update_event']))
{
    try
    {
        $TitulliEventit   =$_REQUEST['TitulliEventit']; //textbox name "txt_name"
        $PershkrimiEventit   =$_REQUEST['PershkrimiEventit'];
        $DataEventit   =$_REQUEST['DataEventit'];
        $ID_Komuna   =$_REQUEST['ID_Komuna'];
        $LlojiEventit   =$_REQUEST['LlojiEventit'];
        $ID_Eventi=$_REQUEST['ID_Eventi'];

        $image_file1 = $_FILES["file1"]["name"];
        $type1       = $_FILES["file1"]["type"];  //file name "txt_file"
        $size1       = $_FILES["file1"]["size"];
        $temp1       = $_FILES["file1"]["tmp_name"];

        $image_file2 = $_FILES["file2"]["name"];
        $type2       = $_FILES["file2"]["type"];  //file name "txt_file"
        $size2       = $_FILES["file2"]["size"];
        $temp2       = $_FILES["file2"]["tmp_name"];

        $image_file3 = $_FILES["file3"]["name"];
        $type3       = $_FILES["file3"]["type"];  //file name "txt_file"
        $size3       = $_FILES["file3"]["size"];
        $temp3       = $_FILES["file3"]["tmp_name"];

        $image_file4 = $_FILES["file4"]["name"];
        $type4       = $_FILES["file4"]["type"];  //file name "txt_file"
        $size4       = $_FILES["file4"]["size"];
        $temp4       = $_FILES["file4"]["tmp_name"];
            
        $path1="upload/".$image_file1; //set upload folder path
        $path2="upload/".$image_file2;
        $path3="upload/".$image_file3;
        $path4="upload/".$image_file4;
        
        $directory="upload/"; //set upload folder path for update time previous file remove and new file upload for next use
        
        if($image_file1 || $image_file2 || $image_file3 || $image_file4)
        {
            if( ($type1=="image/jpg" || $type1=='image/jpeg' || $type1=='image/png' || $type1=='image/gif') ||
                ($type2=="image/jpg" || $type2=='image/jpeg' || $type2=='image/png' || $type2=='image/gif') ||
                ($type3=="image/jpg" || $type3=='image/jpeg' || $type3=='image/png' || $type3=='image/gif') ||
                ($type4=="image/jpg" || $type4=='image/jpeg' || $type4=='image/png' || $type4=='image/gif')) //check file extension
            {   
                if(!file_exists($path1) || !file_exists($path2) || !file_exists($path3) || !file_exists($path4)) //check file not exist in your upload folder path
                {
                    if($size1 < 5000000 || $size2 < 5000000 || $size3 < 5000000 || $size4 < 5000000) //check file size 5MB
                    {
                        unlink($directory.$row['Foto1']); //unlink function remove previous file
                        move_uploaded_file($temp1, "upload/" .$image_file1);  //move upload file temperory directory to your upload folder    
                        unlink($directory.$row['Foto2']);
                        move_uploaded_file($temp2, "upload/" .$image_file2);

                        unlink($directory.$row['Foto3']);
                        move_uploaded_file($temp3, "upload/" .$image_file3);

                        unlink($directory.$row['Foto4']);
                        move_uploaded_file($temp4, "upload/" .$image_file4);
                    }
                    else
                    {
                        $errorMsg="File juaj kalon me shume se 5MB"; //error message file size not large than 5MB
                    }
                }
                else
                {   
                    $errorMsg="File juaj ekziston ne server..."; //error message file not exists your upload folder path
                }
            }
            else
            {
                $errorMsg="Ngarkoni JPG, JPEG, PNG & GIF formate te files ....."; //error message file extension
            }
        }
        else
        {
            $image_file1=$row['Foto1']; //if you not select new image than previous image sam it is it.
            $image_file2=$row['Foto2'];
            $image_file3=$row['Foto3'];
            $image_file4=$row['Foto4'];
        }
    
        if(!isset($errorMsg))
        {
            $update_stmt=$db->prepare('UPDATE eventet SET TitulliEventit=:TitulliEventit, PershkrimiEventit=:PershkrimiEventit, DataEventit=:DataEventit, ID_Komuna=:ID_Komuna, LlojiEventit=:LlojiEventit, Foto1=:file1, Foto2=:file2, Foto3=:file3, Foto4=:file4 WHERE ID_Eventi=:id'); //sql update query
            $update_stmt->bindParam(':TitulliEventit',$TitulliEventit);
            $update_stmt->bindParam(':PershkrimiEventit',$PershkrimiEventit);
            $update_stmt->bindParam(':DataEventit',$DataEventit);
            $update_stmt->bindParam(':ID_Komuna',$ID_Komuna);
            $update_stmt->bindParam(':LlojiEventit',$LlojiEventit);    //bind all parameter
            $update_stmt->bindParam(':file1',$image_file1);
            $update_stmt->bindParam(':file2',$image_file2);
            $update_stmt->bindParam(':file3',$image_file3);
            $update_stmt->bindParam(':file4',$image_file4);
            $update_stmt->bindParam(':id',$ID_Eventi);
             
            if($update_stmt->execute())
            {
                $updateMsg="Modifikimi është kryer me sukses.......";   //file update success message
                header("refresh:5;manageevents.php");  //refresh 3 second and redirect to index.php page
            }
        }
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    
}

?>

<head>
<title>Edit Event</title>
</head>


<?php 
include("header.php");
?>







<div class="container">

<?php
        if(isset($errorMsg))
        {
            ?>
            <div class="alert alert-danger">
                <strong>Gabim ! <?php echo $errorMsg; ?></strong>
            </div>
            <?php
        }
        if(isset($updateMsg)){
        ?>
            <div class="alert alert-success">
                <strong>Sukses ! <?php echo $updateMsg; ?></strong>
            </div>
        <?php
        }
        ?>



	<div class="choose d-choose">

		<h3 class="t-h3">Forma për Modifikimin e te dhenave te Eventit</h3>
           <div class="container">
           	<div class="div-form">

           		<form class="footer-bottom" method="post" enctype="multipart/form-data" >
           			<div class="table-responsive">
           				<table class="table" >
           					<tbody>



           						
           						<tr>
           							<td class="t-td" >Titulli i Eventit: </td>
           							 <td><input class="form-control" type="text" name="TitulliEventit" value='<?php echo $TitulliEventit;?>' /></td>
           						</tr>

           						<tr>
           							<td class="t-td" >Përshkrimi i Eventit: </td>
                                    <td><textarea class="form-control txt-area" name="PershkrimiEventit" rows="10"><?php echo $PershkrimiEventit;?></textarea></td>
           						</tr>

           						<tr>
           							<td class="t-td">Data e Eventit: </td>
           							<td><input class="form-control" type="date" name="DataEventit" value='<?php echo $DataEventit;?>' /></td>
           						</tr>
           						<tr>
                                <td class="t-td" >Komuna:</td>
                             <td><select class="form-control" name="ID_Komuna">
                                <option selected="selected">Zgjedh Komunën</option>
                                <?php
                                        $res=mysqli_query($conn,"SELECT * FROM komunat");
                                        while($row=$res->fetch_array())
                                        {
                                            ?>
                                            <option selected="<?php echo $row['ID_Komuna']; ?>"><?php echo $row['EmriKomunes']; ?></option>
                                            <?php
                                        }
                                        ?>
                                 </select>
                            </td>                                
                            </tr>

						         <tr>
           							<th class="t-td">Lloji i Eventit: </th>
           							<td><input class="form-control" type="text" name="LlojiEventit" value='<?php echo $LlojiEventit;?>'/></td>
           						</tr>
           							<tr>
                                <td class="t-td">Foto:</td>
                                <td>
                                    <input type="file" name="file1" value="<?php echo $Foto1; ?>"/>
                                    <input type="file" name="file2" value="<?php echo $Foto2; ?>"/>
                                    <input type="file" name="file3" value="<?php echo $Foto3; ?>"/>
                                    <input type="file" name="file4" value="<?php echo $Foto4; ?>"/>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <p>
                                        <img src="upload/<?php echo $Foto1; ?>" height="150" width="150"/>
                                        <img src="upload/<?php echo $Foto2; ?>" height="150" width="150"/>
                                        <img src="upload/<?php echo $Foto3; ?>" height="150" width="150"/>
                                        <img src="upload/<?php echo $Foto4; ?>" height="150" width="150"/>
                                    </p>
                                </td>
                            </tr>
                                <tr>
           							</tr>
								</tbody>
                            
                    </table>
                    </div> 
                    <br>
                    <br>
                    <div >
                       <input type="hidden" name="ID_Eventi" value="<?php echo $_GET['ID_Eventi'];?>">
                            <input class="contact-but-blue" name="update_event" type="submit" value="Modifiko" />
                       
                    </div>

                    
                
                </form>
                <div class="clearfix"></div>
			</div>
			
		 
	 </div>
</div>
		 	 
	


<?php
include 'footer.php';
?>