<?php
/* Index.php faqja qe permban formen e loginit) */
include('login.php'); // perfshine scripten login
if ((isset($_SESSION['username']) != '')) {
	header('Location: home.php');
}
?>



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
		</div>
	</div>
	<br>
	<br>
	<!---->
	<div class="container">
		<div class="choose" style="border:solid #526069 1px; width:50%; margin-left:25%;">
			<h3 style="background-color:#526069;">Forma për kyçje</h3>
			<div class="container" style="margin-left:-62.5%;">
				<div style="width:50%; text-align:center; margin:5% auto 2% auto;">
					<form method="POST" action="" class=" footer-bottom ">
						<table class="table table-responsive">
							<tbody>
								<tr>
									<td style="font-weight:bold; color:black;text-align: right;">Perdoruesi:</td>
									<td><input class="form-control" type="text" name="username" required /></td>
								</tr>
								<tr>
									<td style="font-weight:bold; color:black;text-align: right;">Fjalekalimi:</td>
									<td><input class="form-control" type="password" name="password" required/></td>
								</tr>
							</tbody>
						</table>
						<div>
							<input class="contact-but-blue" type="submit" name="submit" value="Kyçuni" />
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