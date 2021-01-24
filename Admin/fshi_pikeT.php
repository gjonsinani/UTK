<?php include('check.php'); ?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include("header.php"); ?>
<!---->
<div class="contact">
	 <div class="container" style="padding: 0; margin: 0 2.5%; width: 95%; ">
	 	<div class="choose d-choose">
			
				<h3 class="t-h3">Forma për fshirjen e pikave turistike</h3>
           
            <div class="d-form">
                <form class=" footer-bottom ">
                	<div style="width: 70%; text-align: center; margin:0 15% 2% 15%;">
					    <div class="input-group">
					      <input type="text" name="term" class="form-control" placeholder="Emri ose Email-i">
					      <span class="input-group-btn">
					        <button class="btn btn-default" type="submit">Kërko</button>
					      </span>
					    </div>
  					</div>
					<div class="table-responsive" >
                    <table class="table table-responsive">
                        <thead>
                        	<tr>
	                            <th class="t-th">Emri i pikës turisktike</th>
	                            <th class="t-th">Komuna</th>
	                            <th class="t-th">Atraksioni</th>
	                            <th class="t-th">Pershkrimi</th>
	                            <th class="t-th">Foto e parë</th>
	                            <th class="t-th">Foto e dytë</th>
	                            <th class="t-th">Foto e tretë</th>
	                            <th class="t-th">Foto e katërt</th>
	                            <th class="t-th">Lokacioni</th>
	                            <th class="t-th">Aprovimi</th>
	                            <th class="t-th">Fshi</th>
                            </tr>
                        </thead>
                        <tbody style="line-height: 0; border: ">
                        	<?php
	if (!empty($_REQUEST['term'])) {

	$term = mysqli_real_escape_string($conn,$_REQUEST['term']);
	$sql = mysqli_query($conn,"SELECT 
		s.ID_pikaT,
  		s.Emri,
 		k.EmriKomunes,
  		a.Atraksioni,
  		s.Pershkrimi,
  		s.Foto1,
  		s.Foto2,
  		s.Foto3,
  		s.Foto4,
  		s.Lokacioni,
  		s.Aprovimi
  		FROM pikatturistike s
  		INNER JOIN komunat k ON s.ID_Komuna=k.ID_Komuna
  		INNER JOIN atraksionet a ON s.ID_Atraksioni=a.ID_Atraksioni
		WHERE Emri LIKE '%".$term."%'"); 

	while($row = mysqli_fetch_array($sql)) { 		
			echo "<tr>";
			echo "<td>".$row['Emri']."</td>";
			echo "<td>".$row['EmriKomunes']."</td>";
			echo "<td>".$row['Atraksioni']."</td>";
			$txt=$row['Pershkrimi'];
			$persh=substr($txt, 0,15);
			echo "<td>".$persh." ..."."</td>";		
			echo '<td><img src="upload/' . $row['Foto1'] . ' "width="50"  height="50""/></td>';
			echo '<td><img src="upload/' . $row['Foto2'] . '"width="50"  height="50""/></td>';
			echo '<td><img src="upload/' . $row['Foto3'] . '"width="50"  height="50""/></td>';
			echo '<td><img src="upload/' . $row['Foto4'] . '"width="50"  height="50""/></td>';
			$txt1=$row['Lokacioni'];
			$lock=substr($txt1, 0,15);
			echo "<td>".$lock." ..."."</td>";

			if ($row['Aprovimi'] == 'PO') {
				echo "<td>".$row['Aprovimi']."</td>";
			}else{
				echo "<td><a href=\"update_aprovimi.php?ID_pikaT=$row[ID_pikaT]\" class='contact-but-blue' style='text-decoration:none;' name='aprovo' type='submit'>Aprovo</a></td>";
			}
			echo "<td><a href=\"delete_pikeT.php?ID_pikaT=$row[ID_pikaT]\" onClick=\"return confirm('A jeni te sigurt se deshironi te fshini pikën turisktike?')\" class='contact-but-red' style='text-decoration:none;'>
										Fshi</a></td></tr>";			
		}

	}

	?>
                            
	                    </tbody>
	                </table>
	                </div>                   
                    
                  </form>
              
                </div>
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