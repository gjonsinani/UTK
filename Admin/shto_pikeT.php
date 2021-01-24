<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include("header.php"); ?>
<!---->
	<div class="container">	
	<div class="choose d-choose">
		 <h3 class="t-h3">Forma për shtimin e pikës Turistike</h3>
		 <div class="container">		 
            <div class="div-form">
                <form class=" footer-bottom " enctype="multipart/form-data"  action="shtoPike.php" method="post" name="form1">
                	<div class="table-responsive">
                    <table class="table">
                            <tbody>
                            <tr>
                                <td class="t-td">Emri i Pikës Turistike: </td>
                                <td><input class="form-control" type="text" name="emri-pika" /></td>
                            </tr>
                            <tr>
                                <td class="t-td">Foto:</td>
                                <td><input class=""  type="file"  name="foto1"/></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input class=""  type="file" name="foto2"/></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input class=""  type="file" name="foto3"/></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input class=""  type="file" name="foto4"/></td>
                            </tr>
                            <tr>
                                <td class="t-td" >Atraksioni:</td>
                                <td><select class="form-control" name="ID_Atraksioni">
                                        <option selected="selected">Zgjedh Atraksionin</option>
                                        <?php
                                        $res=mysqli_query($conn,"SELECT * FROM atraksionet");
                                        while($row=$res->fetch_array())
                                        {
                                            ?>
                                            <option value="<?php echo $row['ID_Atraksioni']; ?>"><?php echo $row['Atraksioni']; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </td>                                
                            </tr>
                            <tr>
                                <td class="t-td" >Komuna:</td>
                             <td><select class="form-control" name="ID_Komuna">
                                <option selected="selected">Zgjedh Komunën</option>
                                <?php
                                        $res=mysqli_query($conn,"SELECT * FROM komunat");
                                        while($row=$res->fetch_array())
                                        {
                                            ?>
                                            <option value="<?php echo $row['ID_Komuna']; ?>"><?php echo $row['EmriKomunes']; ?></option>
                                            <?php
                                        }
                                        ?>
                                 </select>
                            </td>                                
                            </tr>
                            <tr>
                                <td class="t-td">Lokacioni: </td>
                                <td><input class="form-control" type="text" name="lokacioni" /></td>
                            </tr>
                            <tr>
                                <td class="t-td">Pershkrimi:</td>
                                <td><textarea class="form-control txt-area" name="pershkrimi" rows="7" ></textarea></td>
                            </tr>
                        </tbody>
                    </table>
                    </div>                  
                    <div >
                        
                            <input class="contact-but-blue" type="Submit" name="Shto" value="Shto" />
                        
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