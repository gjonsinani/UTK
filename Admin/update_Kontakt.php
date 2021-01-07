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
$result = mysqli_query($conn,"CALL PROCEDURE selectKontakt('$ID_Kontakti')");
while($res = mysqli_fetch_array($result))
{
	$Emri = $res['Emri'];
	$Email = $res['Email'];
	$Tel = $res['Tel'];
	$Mesazhi= $res['Mesazhi'];
}
?>


<!DOCTYPE HTML>
<html>
<head>
<title>UTK</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/lightbox.css">
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="css/style2.css">
<!-- Custom Theme files -->
<!--//theme style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Goaway Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
</head>
<body>
<!-- header -->
<div class="top-header">
	 <div class="container">
		 <div class="logo">
			 <h1><a href="index.html"><span class="glyphicon glyphicon-road" aria-hidden="true"></span> UTK</a></h1>
		 </div>		 
	 </div>
</div>
<!---->
<div class="top-menu">
	 <div class="container">
	  <div class="content white">
		 <nav class="navbar navbar-default">
			 <div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>				
			 </div>
			 <!--/navbar header-->		
			 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				 <ul class="nav navbar-nav">
					 <li><a href="#">Home</a></li>
					 <li><a href="#">About</a></li>
					 <li class="active dropdown">
						<a href="#" class="scroll dropdown-toggle" data-toggle="dropdown">Kontakt<b class="caret"></b></a>
						<ul class=" dropdown-menu">
							<li><a  href="kontakt.php">Kontakti</a></li>
							<li><a  href="suggest.php">Sygjerimet</a></li>
						</ul>
					 </li>					
					 <li><a href="#">Gallery</a></li>
					 <li><a href="#">Typography</a></li>
					 <li><a href="#">Contact</a></li>
				 </ul>
				</div>
			  <!--/navbar collapse-->
		 </nav>
		  <!--/navbar-->		 
	  </div>
	 <div class="clearfix"></div>
		<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
		</div>
</div>
<br>
<br>
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