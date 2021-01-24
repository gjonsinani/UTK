<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include("check.php"); ?>
<?php include_once("config.php");
if(isset($_POST['update']))
{	
	$ID_Kontakti = $_POST['ID_Kontakti'];
	
	$emri=$_POST['Emri'];
	$email=$_POST['Email'];
	$tel=$_POST['Tel'];
	$mesazhi=$_POST['Mesazhi'];
	
	// checking empty fields
	if(empty($emri) || empty($email) || empty($tel) || empty($mesazhi)) {	
			
		if(empty($emri)) {
			echo "<font color='red'>Emri është e zbrazur..</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email është e zbrazur.</font><br/>";
		}
		
		if(empty($tel)) {
			echo "<font color='red'>Nr. Telefonit është e zbrazur.</font><br/>";
		}
		if(empty($mesazhi)) {
			echo "<font color='red'>Mesazhi është e zbrazur.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($conn,"CALL uKontakt('$ID_Kontakti','$emri','$email','$tel','$mesazhi')");
		
		
		header("Location: modifiko_Kontakt.php");
	}
}
?>
<?php
//getting uid from url
$ID_Kontakti = $_GET['ID_Kontakti'];

//selecting data associated with this particular uid
$result = mysqli_query($conn,"SELECT * FROM kontaktet WHERE ID_Kontakti=$ID_Kontakti");
while($res = mysqli_fetch_array($result))
{
	$Emri = $res['Emri'];
	$Email = $res['Email'];
	$Tel = $res['Tel'];
	$Mesazhi= $res['Mesazhi'];
}
?>

<?php include_once('header.php') ?>
<!---->
<div class="container">	
<div class="choose d-choose">
<h3 class="t-h3">Forma për modifikimin e Kontakteve</h3>
<div class="container">		 
<div class="div-form">
<form method="post" Kontakti="form1" action="update_Kontakt.php" class=" footer-bottom ">
<div class="table-responsive">
<table class="table">
    <tbody>
    <tr>
        <td class="t-td">Emri dhe Mbiemri: </td>
        <td><input class="form-control" type="text" name="Emri" value='<?php echo $Emri;?>'></td>
        
    </tr>
    <tr>
        <td class="t-td">Email-i:</td>
        <td><input class="form-control" type="text" name="Email" value='<?php echo $Email;?>'></td>
        
    </tr>
    <tr>
        <td class="t-td" >Nr. i Telefonit:
        	<br><small>Shembull: 123-45-678</small></td>
        <td><input class="form-control" type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" required name="Tel" value='<?php echo $Tel;?>'>

        </td>
        
    </tr>
    <tr>
        <td class="t-td">Mesazhi:</td>
        <td><textarea class="form-control txt-area" name="Mesazhi" rows="5" ><?php echo $Mesazhi;?></textarea></td>
        
    </tr>
    <tr>
    	<td><input type="hidden" name="ID_Kontakti" value='<?php echo $_GET['ID_Kontakti'];?>' /></td>
    	<td><input class="contact-but-blue" name="update" type="submit" value="Modifiko" /></td>
    </tr>
</tbody>
</table>
</div>                   
<div >
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