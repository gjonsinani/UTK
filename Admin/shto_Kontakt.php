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
									<li><a href="kontakt.php">Kontakti</a></li>
									<li><a href="sygjerim.php">Sygjerimet</a></li>
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
		<div class="choose" style="border:solid #526069 1px;">
			<h3 style="background-color:#526069;">Forma për Menaxhimin e Kontakteve</h3>
			<div class="container">
				<div style="width:80%; text-align:center; margin:5% auto 2% auto;">
					<form class=" footer-bottom ">
						<table class="table table-responsive">
							<tbody>
								<tr>
									<td style="font-weight:bold; color:black;text-align: right;">Emri dhe Mbiemri: </td>
									<td><input class="form-control" type="text" name="Emri" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Emri dhe Mbiemri';}" /></td>

								</tr>
								<tr>
									<td style="font-weight:bold; color:black;text-align: right;">Email-i:</td>
									<td><input class="form-control" type="text" name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email-i';}" /></td>

								</tr>
								<tr>
									<td style="font-weight:bold; color:black; text-align: right;">Nr. i Telefonit:</td>
									<td><input class="form-control" type="tel" name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'xxx/xxx-xxx';}" /></td>

								</tr>
								<tr>
									<td style="font-weight:bold; color:black;text-align: right;">Mesazhi:</td>
									<td><textarea class="form-control" name="Mesazhi" rows="5" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mesazhi juaj';}"></textarea></td>

								</tr>
							</tbody>
						</table>
						<div>
							<form>
								<input class="contact-but-blue" type="submit" value="Shto" />
							</form>
						</div>

					</form>
					<div class="clearfix"></div>
				</div>


			</div>
		</div>

<?php
include("footer.php");
?>