		<!-- footer -->
		<?php
		$result = mysqli_query($conn, "SELECT * FROM footer order by id_footer DESC limit 1 ");
		while ($row = mysqli_fetch_array($result)) {
			extract($row);
			if ($result == null)
				mysqli_free_result($result);
		?>



		<footer style="margin-top: 5%">
			<div class="copywrite">

				<p>© <?php echo $pershkrimi ?> | <a href=" <?php echo $link ?> "><i class="fa fa-<?php echo $ikonat ?>" aria-hidden="true"></i></a></p>
<?php } ?>
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