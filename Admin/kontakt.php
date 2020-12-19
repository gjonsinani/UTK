<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
include("header.php");
?>
	<div class="container">
		<div class="choose border-dark-1px">
			<h3 class="bg-color-dark">Forma për Menaxhimin e Kontakteve</h3>
			<div class="container">
				<div class="choos-girds">
					<div class="col-md-4 choos-grid">
						<span class="glyphicon5 glyphicon-plus" style="color:#337ab7 ;" aria-hidden="true"></span>
						<p>Forma për shtimin e kontaktit.</p>
						<br>
						<button onclick="location.href='shto_Kontakt.php'" type="button" class="contact-but-blue">
							Shto</button>
					</div>

					<div class="col-md-4 choos-grid">
						<span class="glyphicon5 glyphicon-pencil" style="color:#5cb85c ;" aria-hidden="true"></span>
						<p>Forma për modifikimin e kontakteve.</p>
						<br>
						<button onclick="location.href='modifiko_Kontakt.php'" type="button" class="contact-but-green">
							Modifiko</button>
					</div>

					<div class="col-md-4 choos-grid">
						<span class="glyphicon5 glyphicon-remove" style="color:#d9534f ;" aria-hidden="true"></span>
						<p>Forma për fshirjen e kontakteve.</p>
						<br>
						<button onclick="location.href='fshij_Kontakt.php'" type="button" class="contact-but-red">
							Fsh</button>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>


		<!-- footer -->

		<footer>
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