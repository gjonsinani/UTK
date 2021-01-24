<?php include("check.php"); ?>
<?php include_once("config.php");

if(isset($_POST['update']))
{	
	$ID_Atraksioni = $_POST['ID_Atraksioni'];
	
	$emri=$_POST['Emri'];
	
	// checking empty fields
	if(empty($emri)) {	
			
		if(empty($emri)) {
			echo "<font color='red'>Emri është e zbrazur..</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($conn,"UPDATE atraksionet SET Atraksioni='$emri' WHERE ID_Atraksioni=$ID_Atraksioni");
		
		
		header("Location: modifiko_atraksion.php");
	}
}
?>
<?php
//getting uid from url
$ID_Atraksioni = $_GET['ID_Atraksioni'];

//selecting data associated with this particular uid
$result = mysqli_query($conn,"SELECT * FROM atraksionet WHERE ID_Atraksioni=$ID_Atraksioni");
while($res = mysqli_fetch_array($result))
{
	$Emri = $res['Atraksioni'];
}
?>

<?php include_once('header.php') ?>

<div class="contact">
	 <div class="container">
	 	<div class="choose d-choose">
			
				<h3 class="t-h3">Forma për modifikimin e të dhënave të atraksionit</h3>
           
            <div class="d-form" >
	                <form method="post" Kontakti="form1" action="update_Atraksion.php" class=" footer-bottom ">
						<div class="table-responsive">
						<table class="table">
						    <tbody>
						    <tr>
						        <td class="t-td">Emri dhe Mbiemri: </td>
						        <td><input class="form-control" type="text" name="Emri" value='<?php echo $Emri;?>'></td>
						    </tr>
						    <tr>
						    	<td><input type="hidden" name="ID_Atraksioni" value="<?php echo $_GET['ID_Atraksioni'];?>" ></td>
						    	<td><input class="contact-but-blue" name="update" type="submit" value="Modifiko" ></td>
						    </tr>
						</tbody>
						</table>
						</div>                   
						<div >
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