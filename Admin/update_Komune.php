<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("check.php");	
?>

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
			echo "<font color='red'>Emri field is empty.</font><br/>";
		}
		
		if(empty($Emblema)) {
			echo "<font color='red'>Mbiemri field is empty.</font><br/>";
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


<!DOCTYPE HTML>
<html>
<head>
<title>Update Komunë - Menagjimi i Komunave</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="css/style2.css">
<link rel="stylesheet" href="css/lightbox.css">



<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
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
			 <h1><a href="index.html"><span class="glyphicon glyphicon-road" aria-hidden="true"></span>Goaway</a></h1>
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
					 <li><a href="index.html">Home</a></li>
					 <li><a href="about.html">About</a></li>
					 <li class="dropdown">
						<a href="#" class="scroll dropdown-toggle" data-toggle="dropdown">Destinations<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a class="scroll" href="#destination">Destination 1</a></li>
							<li><a class="scroll" href="#destination">Destination 2</a></li>
							<li><a class="scroll" href="#destination">Destination 3</a></li>
							<li><a class="scroll" href="#destination">Destination 4</a></li>
						</ul>
					 </li>
					 <li class="active"><a href="manageevents.php">Eventet</a></li>					
					 <li><a href="gallery.html">Gallery</a></li>
					 <li><a href="typo.html">Typography</a></li>
					 <li><a href="contact.html">Contact</a></li>
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
<!---->
<br>
<br>
<br>
<br>
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
           							 <td><input class="form-control" type="text" name="EmriKomunes" value="<?php echo $emriKomunes?>" /></td>
           						</tr>
           					
           							<tr>
           							<td class="t-td">Ngarko Emblemën e Komunes: </td>
           							                <td><input name="Emblema" type="file" /></td>
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
		 	 
	


<div class="copywrite">
	 <div class="container">
			 <p> © 2015 Goaway. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
	 </div>
</div>

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