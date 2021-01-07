<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php include_once('config.php'); ?>
<?php include("header.php"); ?>
<!---->
<div class="contact">
	 <div class="container">
	 	<div class="choose d-choose">
			
				
				<h3 class="t-h3">Forma për fshirjen e të dhënave të kontaktit</h3>
            
            <div class="d-form">
                <form class=" footer-bottom " action="" method="post">
                	<div style="width: 70%; text-align: center; margin:0 15% 2% 15%;">
					    <div class="input-group">
					      <input type="text" name="term" class="form-control" placeholder="Emri ose Email-i">
					      <span class="input-group-btn">
					        <button class="btn btn-default" type="submit">Kërko</button>
					      </span>
					    </div>
  					</div>
  					</form>
					<div class="table-responsive" style="width: 100%;">
                    <table class="table" style="width: 100%;">
                        <thead>
                        	<tr>
	                            <th class="t-th">Emri dhe Mbiemri</th>
	                            <th class="t-th">Email</th>
	                            <th class="t-th">Nr. i Telefonit</th>
	                            <th class="t-th">Mesazhi</th>
	                            <th class="t-th">Fshi</th>
                            </tr>
                        </thead>
                        <tbody style="line-height: 0;text-align: center;">
                        	<?php
								if (!empty($_REQUEST['term'])) {
								$term =mysqli_real_escape_string ($conn,$_REQUEST['term']);     
								$sql = mysqli_query($conn,"CALL sterm('$term');");
								while($row = mysqli_fetch_array($sql)) { 		
										echo "<tr>";
										echo "<td>".$row['Emri']."</td>";
										echo "<td>".$row['Email']."</td>";
										echo "<td>".$row['Tel']."</td>";
										echo "<td>".$row['Mesazhi']."</td>";	
										echo "<td><a href=\"delete_Kontakt.php?ID_Kontakti=$row[ID_Kontakti]\" onClick=\"return confirm('A jeni te sigurt se deshironi te fshini kontaktin?')\" class='contact-but-red' style='text-decoration:none;'>
										Fshi</a></td></tr>";		
						}

					}

					?>
	                    </tbody>
	                </table>
	                </div>                   
                    
                
                
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