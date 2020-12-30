<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
--><?php include("header.php"); ?>
<!---->
	<div class="container">	
	<div class="choose d-choose">
		 <h3 class="t-h3">Forma për Shtimin e Kontakteve</h3>
		 <div class="container">		 
            <div class="div-form">
                <form class=" footer-bottom " method="post" action="shtoKontakt.php">
                	<div class="table-responsive">
                    <table class="table">
                            <tbody>
                            <tr>
                                <td class="t-td">Emri dhe Mbiemri: </td>
                                <td><input class="form-control" type="text" name="Emri" onfocus="this.value = '';"/></td>
                                
                            </tr>
                            <tr>
                                <td class="t-td">Email-i:</td>
                                <td><input class="form-control" type="text" name="Email" onfocus="this.value = '';"/></td>
                                
                            </tr>
                            <tr>
                                <td class="t-td" >Nr. i Telefonit:
                                <br><small>Shembull: 123-45-678</small></td>
                                <td><input class="form-control" type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" name="Tel" onfocus="this.value = '';"/></td>
                                
                            </tr>
                            <tr>
                                <td class="t-td">Mesazhi:</td>
                                <td><textarea class="form-control txt-area" name="Mesazhi" rows="5"></textarea></td>
                                
                            </tr>
                        </tbody>
                    </table>
                    </div>                   
                    <div >
                        <form>
                            <input class="contact-but-blue" type="submit" name="shtoKontakt" value="Shto" />
                        </form>
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