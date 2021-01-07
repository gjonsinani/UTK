<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php include_once('config.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Modifiko Komuna</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/lightbox.css">
<link rel="stylesheet" type="text/css" href="css/style2.css">


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
	 <div class="contact">
	 	<div class="container">
	 		<div class="choose d-choose">
	 			<h3 class="t-h3">Forma për modifikimin e të dhënave të Komunes</h3>

	 			<div class="d-form" >
               
                <form action="" method="post" class=" footer-bottom ">
                	
                		<div style="width: 70%; text-align: center; margin:0 15% 2% 15%;">
					    <div class="input-group">
					      <input type="text" name="term" class="form-control" placeholder="Emri i Komunes">
					      <span class="input-group-btn">
					        <button class="btn btn-default" type="submit">Kërko</button>
					      </span>
					      </div><!-- /input-group---->
					  </div>
	 	<div class="table-responsive" style="width: 100%;">
                    <table class="table" style="width: 100%;">
                        <thead>
                        	<tr>
	                            <th class="t-th">Emri i Komunes</th>
	                            <th class="t-th">Emblema e Komunes</th>
	                            <th class="t-th">Modifiko</th>
                            </tr>
                        </thead>
                        <tbody style="line-height: 0;text-align: center;">
                        	<?php
								if (!empty($_REQUEST['term'])) {
								$term = ($_REQUEST['term']);     
								$sql = mysqli_query($conn,"CALL sterm_komunat('$term');");
								while($row = mysqli_fetch_array($sql)) { 		
										echo "<tr>";
										echo "<td>".$row['EmriKomunes']."</td>";
										echo "<td>"."<img style='max-width:70px;' src='images/".$row['Emblema']."' >"."</td>";
										


										echo "<td><a href=\"update_Komune.php?ID_Komuna=$row[ID_Komuna]\" class='contact-but-green' style='text-decoration:none;' type='submit'>
										Modifiko</a></td></tr>";		
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