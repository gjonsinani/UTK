<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
	<title>UTK</title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/lightbox.css">
	<link rel="stylesheet" href="/css/fontawesome.min.css">
	<!-- Custom Theme files -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- Custom Theme files -->
	<!--//theme style-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Goaway Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
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
							<li><a href="#">Home</a></li>
							<li><a href="#">About</a></li>
							<li class="active dropdown">
								<a href="#" class="scroll dropdown-toggle" data-toggle="dropdown">Kontakt<b class="caret"></b></a>
								<ul class=" dropdown-menu">
									<li><a class="scroll" href="kontakt.php">Kontakti</a></li>
									<li><a class="scroll" href="sygjerim.php">Sygjerimet</a></li>
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
	<div class="choose" style="border:solid #526069 1px;">
		<h3 style="background-color:#526069;">Forma për menaxhimin e Kontakteve</h3>
		<div class="container">
			<div class="choos-girds">
				<div class="col-md-4 choos-grid">
					<span class="glyphicon5 glyphicon-plus" style="color:#337ab7 ;" aria-hidden="true"></span>
					<h4>Shto Kontaktin</h4>
					<p>Forma për shtimin e kontaktit.</p>
					<h4><a href="shto_Kontakt.php" class="label label-primary">Shto Kontakte</a></h4>
				</div>

				<div class="col-md-4 choos-grid">
					<span class="glyphicon5 glyphicon-pencil" style="color:#5cb85c ;" aria-hidden="true"></span>
					<h4>Modifiko Kontaktin</h4>
					<p>Forma për modifikimin e kontakteve.</p>
					<h4><a href="modifiko_Kontakt.php" class="label label-success">Modifiko Kontakte</a></h4>
				</div>

				<div class="col-md-4 choos-grid">
					<span class="glyphicon5 glyphicon-remove" style="color:#d9534f ;" aria-hidden="true"></span>
					<h4>Fshijë Kontaktin</h4>
					<p>Forma për fshirjen e kontakteve.</p>
					<h4><a href="fshije_Kontakt.php" class="label label-danger">Fshijë Kontakte</a></h4>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>

	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-6 ftr-grid1">
					<h4>Information</h4>
					<p>Nam ac interdum dui, eget iaculis augue. Cras sagittis orci leo, quis luctus diam sollicitudin in. Nullam in convallis sem. Aliquam erat felis, iaculis ac semper et, congue feugiat nibh. Nullam commodo fermentum venenatis.</p>
					<div class="social">
						<a href="#"><i class="facebook"></i></a>
						<a href="#"><i class="twitter"></i></a>
						<a href="#"><i class="dribble"></i></a>
						<a href="#"><i class="google"></i></a>
						<a href="#"><i class="youtube"></i></a>
					</div>
				</div>
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
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
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
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
	<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!---->
	<script src="js/responsiveslides.min.js"></script>
</body>

</html>