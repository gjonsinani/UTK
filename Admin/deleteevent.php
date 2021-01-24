<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<head>
<title>Delete Event - Events Managements</title>
</head>

<?php 
include("header.php");
?>




<!---->

	 <div class="contact">
	 	<div class="container">
	 		<div class="choose d-choose">
	 			<h3 class="t-h3">Forma për fshirjen e Eventeve</h3>

	 			<div class="d-form" >
               
                <form action="" method="post" class=" footer-bottom ">
                	
                		<div style="width: 70%; text-align: center; margin:0 15% 2% 15%;">
					    <div class="input-group">
					      <input type="text" name="term" class="form-control" placeholder="Titulli i eventit">
					      <span class="input-group-btn">
					        <button class="btn btn-default" type="submit">Kërko</button>
					      </span>
					      </div><!-- /input-group -->
					  </div>
	 	<div class="table-responsive" style="width: 100%;">
                    <table class="table" style="width: 100%;">
                        <thead>
                        	<tr>
	                            <th class="t-th">Titulli i Eventit</th>
	                            <th class="t-th">Përshkrimi i Eventit</th>
	                            <th class="t-th">Data e Eventit</th>
	                            <th class="t-th">Komuna</th>
	                            <th class="t-th">Lloji i Eventit</th>
	                            <th class="t-th">Foto 1</th>
	                            <th class="t-th">Foto 2</th>
	                            <th class="t-th">Foto 2</th>
	                            <th class="t-th">Foto 4</th>
	                            <th class="t-th">Fshijë</th>
                            </tr>
                        </thead>
                        <tbody style="line-height: 0;text-align: center;">
                        	
<?php
	if (!empty($_REQUEST['term'])) { 

	$term = mysqli_real_escape_string($conn,$_REQUEST['term']); 
	$sql = mysqli_query($conn,"SELECT 
		s.ID_Eventi,
  		s.TitulliEventit,
  		s.PershkrimiEventit,
 		s.DataEventit,
  		k.EmriKomunes,
  		s.LlojiEventit,
  		s.Foto1,
  		s.Foto2,
  		s.Foto3,
  		s.Foto4
  		
  		FROM eventet s
  		INNER JOIN komunat k ON s.ID_Komuna=k.ID_Komuna
        WHERE s.TitulliEventit LIKE '%".$term."%'");

	while($row = mysqli_fetch_array($sql)) { 		
			echo "<tr>";
			$titulliE=$row['TitulliEventit'];
			$text1=substr($titulliE, 0,10);
			echo "<td>".$text1.' ...'."</td>";
			$pershk=$row['PershkrimiEventit'];
			$text=substr($pershk, 0,15);
			echo "<td>".$text.' ...'."</td>";
			echo "<td>".$row['DataEventit']."</td>";
			echo "<td>".$row['EmriKomunes']."</td>";	
			echo "<td>".$row['LlojiEventit']."</td>";	
			echo '<td><img src="upload/' . $row['Foto1'] . ' "width="50"  height="50""/></td>';
			echo '<td><img src="upload/' . $row['Foto2'] . '"width="50"  height="50""/></td>';
			echo '<td><img src="upload/' . $row['Foto3'] . '"width="50"  height="50""/></td>';
			echo '<td><img src="upload/' . $row['Foto4'] . '"width="50"  height="50""/></td>';
			

			echo "<td><a href=\"delete_event.php?ID_Eventi=$row[ID_Eventi]\" onClick=\"return confirm('A jeni te sigurt se deshironi te fshini Eventin?')\" class='contact-but-red' style='text-decoration:none;'>
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