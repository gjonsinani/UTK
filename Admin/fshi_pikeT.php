<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include("header.php"); ?>
<!---->
<div class="contact">
	 <div class="container">
	 	<div class="choose d-choose">
			
				<h3 class="t-h3">Forma për Modifikimin e Sygjerimeve të Përdoruesit</h3>
           
            <div class="d-form">
                <form class=" footer-bottom ">
                	<div class="input-group table-responsive" style="margin:5%;">
						<span class="input-group-addon" id="basic-addon1">Kerko Piken Turistike : </span>
						<input type="text" class="form-control" placeholder="Emri ose Komuna" aria-describedby="basic-addon1">
					</div>
					<div class="table-responsive" >
                    <table class="table table-responsive">
                        <thead>
                        	<tr>
	                            <th class="t-th">Emri</th>
	                            <th class="t-th">Foto</th>
	                            <th class="t-th">Video</th>
	                            <th class="t-th">Linku</th>
	                            <th class="t-th">Lokacioni</th>
	                            <th class="t-th">Komuna</th>
	                            <th class="t-th">Linqe të shpejta</th>
	                            <th class="t-th">Atraksioni</th>
	                            <th class="t-th">Pershkrimi</th>
	                            <th class="t-th">Fshi</th>
                            </tr>
                        </thead>
                        <tbody style="line-height: 0; border: ">
                        	<tr>
                        		<td>Maja e Lybetenit</td>
                        		<td>img.png</td> 
                        		<td>vid.mp4</td>
                        		<td>https://goo.gl/maps/H1tJSsgsLQB6uSE37</td>
                        		<td>Shtërpc</td>  
                        		<td>Ferizaj</td>  
                        		<td>www.fb.com/komunaeferizajit</td>  
                        		<td>Natyror</td>  
                        		<td>TEXT</td>  
                        		<td><input class="contact-but-red" type="submit" value="Fshi" /></td>                          	
                            </tr>
                            
	                    </tbody>
	                </table>
	                </div>                   
                    
                
                </form>
                </div>
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