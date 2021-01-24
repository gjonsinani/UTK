<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update_Komune']))
{	
	$ID_Komuna = $_POST['ID_Komuna'];
	$emriKomunes=$_POST['EmriKomunes'];
	
	$imgData =addslashes (file_get_contents($_FILES['Emblema']['tmp_name']));
	$Emblema = $_FILES['Emblema']['name'];
	$maxsize = 10000000; //set to approx 10 MB
	
	// checking empty fields
	if(empty($emriKomunes) || empty($Emblema)) {	
			
		if(empty($emriKomunes)) {
			echo "<font color='red'>Emri i Komunes eshte i zbrazet.</font><br/>";
		}
		
		if(empty($Emblema)) {
			echo "<font color='red'>Emblema i Komunes eshte e zbrazet.</font><br/>";
		}
	} else {	
		//updating the table
		$result = mysqli_query($conn,"UPDATE komunat SET EmriKomunes='$emriKomunes', EmblemaBlob='$imgData', Emblema='$Emblema' WHERE ID_Komuna=$ID_Komuna");
		
		//redirectig to the display message. In our case, it is ballina.php
		header("Location: menaxhokomunat.php");
	}
}
?>
<?php
//getting ID_Stud from url
$ID_Komuna = $_GET['ID_Komuna'];

//selecting data associated with this particular ID_Stud
$result = mysqli_query($conn,"SELECT * FROM komunat WHERE ID_Komuna=$ID_Komuna");

while($res = mysqli_fetch_array($result))
{
	$emriKomunes = $res['EmriKomunes'];
	$Emblema = $res['Emblema'];
}
?>




<script type='text/javascript'>
function preview_image(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
</script>


<head>
<title>Modifiko Komunë - Menaxhimi i Komunave</title>
</head>

<?php 
include("header.php");


?>


<div class="container">	
	<div class="choose d-choose">
		<h3 class="t-h3">Forma për Modifikimin e te dhenave te Komunes</h3>
           <div class="container">
           	<div class="div-form">
           		<form class="footer-bottom" method="post" Komuna="form1" action="update_Komune.php" enctype="multipart/form-data" >
           			<div class="table-responsive">
           				<table class="table">
           					<tbody>



           						
           						<tr>
           							<td class="t-td">Emri i Komunes: </td>
           							 <td><input class="form-control" type="text" name="EmriKomunes" value="<?php echo $emriKomunes?>" required="" oninvalid="this.setCustomValidity('Ju lutem Plotesoni Emrin e Komunes')" oninput="setCustomValidity('')"  /></td>
           						</tr>
           					
           							<tr>
           							<td class="t-td">Ngarko Emblemën e Komunes: </td>
           							                <td><input name="Emblema" type="file" onchange="preview_image(event)" required="" oninvalid="this.setCustomValidity('Ju lutem Ngarkoni Emblemen e Komunes')" oninput="setCustomValidity('')" /></td>
													<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
			                                          
													</td>
									</tr>
									<tr>
										<td><input type="hidden" name="ID_Komuna" value='<?php echo $_GET['ID_Komuna'];?>' /></td>
									
									</tr>		
								

           						

                            </tbody>
                            
                    </table>
                    </div> 
                    <br>
                    <br>
                    <div >
                        <form>
                            <input class="contact-but-blue" name="update_Komune" type="submit" value="Modifiko" />
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