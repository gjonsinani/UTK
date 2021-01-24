<?php

require_once "connection.php";

if(isset($_REQUEST['ID_pikaT']))
{
    try
    {
        $id = $_REQUEST['ID_pikaT']; //get "update_id" from index.php page through anchor tag operation and store in "$id" variable
        $select_stmt = $db->prepare('SELECT * FROM pikatturistike WHERE ID_pikaT =:id'); //sql select query
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

if(isset($_REQUEST['update']))
{
    try
    {
        $emri   =$_REQUEST['emri-pika']; //textbox name "txt_name"
        $lokacioni   =$_REQUEST['lokacioni'];
        $pershkrimi   =$_REQUEST['pershkrimi'];
        $ID_Atraksioni   =$_REQUEST['ID_Atraksioni'];
        $ID_Komuna   =$_REQUEST['ID_Komuna'];
        $ID_pikaT=$_REQUEST['ID_pikaT'];

        $image_file1 = $_FILES["foto1"]["name"];
        $type1       = $_FILES["foto1"]["type"];  //file name "txt_file"
        $size1       = $_FILES["foto1"]["size"];
        $temp1       = $_FILES["foto1"]["tmp_name"];

        $image_file2 = $_FILES["foto2"]["name"];
        $type2       = $_FILES["foto2"]["type"];  //file name "txt_file"
        $size2       = $_FILES["foto2"]["size"];
        $temp2       = $_FILES["foto2"]["tmp_name"];

        $image_file3 = $_FILES["foto3"]["name"];
        $type3       = $_FILES["foto3"]["type"];  //file name "txt_file"
        $size3       = $_FILES["foto3"]["size"];
        $temp3       = $_FILES["foto3"]["tmp_name"];

        $image_file4 = $_FILES["foto4"]["name"];
        $type4       = $_FILES["foto4"]["type"];  //file name "txt_file"
        $size4       = $_FILES["foto4"]["size"];
        $temp4       = $_FILES["foto4"]["tmp_name"];
            
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
            $update_stmt=$db->prepare('UPDATE pikatturistike SET Emri=:name, ID_Komuna=:Komuna,ID_Atraksioni=:Atraksioni,Pershkrimi=:Pershkrimi,Foto1=:file1,Foto2=:file2,Foto3=:file3,Foto4=:file4,Lokacioni=:Lokacioni WHERE ID_pikaT=:id'); //sql update query
            $update_stmt->bindParam(':name',$emri);
            $update_stmt->bindParam(':Komuna',$ID_Komuna);
            $update_stmt->bindParam(':Atraksioni',$ID_Atraksioni);
            $update_stmt->bindParam(':Pershkrimi',$pershkrimi);
            $update_stmt->bindParam(':file1',$image_file1);
            $update_stmt->bindParam(':file2',$image_file2);
            $update_stmt->bindParam(':file3',$image_file3);
            $update_stmt->bindParam(':file4',$image_file4);
            $update_stmt->bindParam(':Lokacioni',$lokacioni);    //bind all parameter
            $update_stmt->bindParam(':id',$ID_pikaT);
             
            if($update_stmt->execute())
            {
                $updateMsg="Modifikimi me sukses.......";   //file update success message
                header("refresh:5;pikat_turistike.php");  //refresh 3 second and redirect to index.php page
            }
        }
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    
}

?>
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
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include("header.php"); ?>
<!---->
	<div class="container">	
	<div class="choose d-choose">

		 <h3 class="t-h3">Forma për shtimin e pikës Turistike</h3>
		 <div class="container">		 
            <div class="div-form">
                <form class=" footer-bottom " enctype="multipart/form-data"  method="post">
                	<div class="table-responsive">
                    <table class="table">
                            <tbody>
                            <tr>
                                <td class="t-td">Emri i Pikës Turistike: </td>
                                <td><input class="form-control" type="text" name="emri-pika" value="<?php echo $Emri; ?>" /></td>
                            </tr>
                            <tr>
                                <td class="t-td">Foto:</td>
                                <td>
                                    <input type="file" name="foto1" value="<?php echo $Foto1; ?>"/>
                                    <input type="file" name="foto2" value="<?php echo $Foto2; ?>"/>
                                    <input type="file" name="foto3" value="<?php echo $Foto3; ?>"/>
                                    <input type="file" name="foto4" value="<?php echo $Foto4; ?>"/>
                                    
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
                                <td class="t-td" >Atraksioni:</td>
                                <td><select class="form-control" name="ID_Atraksioni">
                                        <option selected="selected">Zgjedh Atraksionin</option>
                                        <?php
                                        $res=mysqli_query($conn,"SELECT * FROM atraksionet");
                                        while($row=$res->fetch_array())
                                        {
                                            ?>
                                            <option value="<?php echo $row['ID_Atraksioni']; ?>"><?php echo $row['Atraksioni']; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </td>                                
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
                                            <option value="<?php echo $row['ID_Komuna']; ?>"><?php echo $row['EmriKomunes']; ?></option>
                                            <?php
                                        }
                                        ?>
                                 </select>
                            </td>                                
                            </tr>
                            <tr>
                                <td class="t-td">Lokacioni: </td>
                                <td><input class="form-control" type="text" name="lokacioni" value="<?php echo $Lokacioni; ?>" /></td>
                            </tr>
                            <tr>
                                <td class="t-td">Pershkrimi:</td>
                                <td><textarea class="form-control txt-area" name="pershkrimi" rows="7" ><?php echo $Pershkrimi; ?></textarea></td>
                            </tr>
                            <tr>
                                <td><input type="hidden" name="ID_pikaT" value="<?php echo $_GET['ID_pikaT'];?>" /></td>
                                <td><input class="contact-but-blue" name="update" type="submit" value="Modifiko" /></td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </form>
                <div class="clearfix"></div>
			</div>
			
		 
	 </div>
</div>

<!-- footer -->

<footer style="margin-top: 5%">
	<div class="copywrite">
		 <div class="container">
				 <p> © 2015 Goaway. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		 </div>
	</div>
</footer>
<!---->
<script src="js/lightbox-plus-jquery.min.js"></script>
<!---->
<!--/animatedcss-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<!--script-->
<script type="text/javascript">
		$(document).ready(function() {
				/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/
		$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!---->
<script src="js/responsiveslides.min.js"></script> 
</body>
</html>