<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
?>



<head>
<title>Fshije Komune - Menaxhimi i Komunave</title>
</head>

<?php 
include("header.php");


?>
	 <div class="contact">
	 	<div class="container">
	 		<div class="choose d-choose">
	 			<h3 class="t-h3">Forma për fshirjen e Komunave</h3>

	 			<div class="d-form" >
               
                <form action="" method="post" class=" footer-bottom ">
                	
                		<div style="width: 70%; text-align: center; margin:0 15% 2% 15%;">
					    <div class="input-group">
					      <input type="text" name="term" class="form-control" placeholder="Emri i Komunes">
					      <span class="input-group-btn">
					        <button class="btn btn-default" type="submit">Kërko</button>
					      </span>
					      </div><!-- /input-group -->
					  </div>
	 	<div class="table-responsive" style="width: 100%;">
                    <table class="table" style="width: 100%;">
                        <thead>
                        	<tr>
	                            <th class="t-th">Emri i Komunes</th>
	                            <th class="t-th">Emblema e Komunes</th>
	                            <th class="t-th">Fshije</th>
                            </tr>
                        </thead>
                        </thead>
                        <tbody style="line-height: 0;text-align: center;">
                        	<?php
								if (!empty($_REQUEST['term'])) {
								$term = ($_REQUEST['term']);     
								$sql = mysqli_query($conn,"CALL sterm_komunat('$term');");
								while($row = mysqli_fetch_array($sql)) { 		
										echo "<tr>";
										echo "<td>".$row['EmriKomunes']."</td>";
										echo "<td><img src=data:image/jpeg;base64,".base64_encode($row['EmblemaBlob'])." width='80'  height='100'/></td>";
										
										echo "<td><a href=\"deletekomune.php?ID_Komuna=$row[ID_Komuna]\" onClick=\"return confirm('A jeni te sigurt se deshironi te fshini Komunën?')\" class='contact-but-red' style='text-decoration:none;'>
										Fshi</a></td></tr>";		
						}

					}

					?>
	                    </tbody>
	                </table>
	                </div>              
	                </form>   
	                <div class="clearfix"></div>
	            </div>
	        </div>
	    </div>
	</div>


	
		 
				 
	</div>			 

	


<?php
include 'footer.php';
?>