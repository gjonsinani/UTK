<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->


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
<title>Shto Komunë - Menagjimi i Komunave</title>
</head>

<?php 
include("header.php");


?>
<div class="container">	
	<div class="choose d-choose">
		<h3 class="t-h3">Forma për Shtimin e Komunave</h3>
           <div class="container">
           	<div class="div-form">
           		<form class="footer-bottom" method="post" action="shtoKomune.php" enctype="multipart/form-data" >
           			<div class="table-responsive">
           				<table class="table">
           					<tbody>
           						
           						<tr>
           							<td class="t-td">Emri i Komunes: </td>
           							 <td><input class="form-control" type="text" name="EmriKomunes"  required="" oninvalid="this.setCustomValidity('Ju lutem Plotesoni Emrin e Komunes')" oninput="setCustomValidity('')"/></td>
           						</tr>
           						<tr>
           							<td class="t-td">Ngarko Emblemën e Komunes: </td>
													
												
													<td>
														<input name="Emblema" type="file" onchange="preview_image(event)"  required="" oninvalid="this.setCustomValidity('Ju lutem ngarkoni Emblemen e Komunes')" oninput="setCustomValidity('')"/>
														<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
														<br>
														<img id="output_image" style="max-width:100px; display: block;" />
													</td>
												</tr>
												

														<!--<input type="file" name="Emblema" value="" onchange="preview_image(event)"/>
														//<br>
                                                       //<img id="output_image" style="max-width:200px; display: block;" />
                                                   
-->
													</td>
													
								</tr>

           						

                            </tbody>
                            
                    </table>
                    </div> 
                    <br>
                    <br>

                    <div >
                        <form>
                            <input class="contact-but-blue" type="submit" value="Shto" name="submit" />
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