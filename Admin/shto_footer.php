<?php
include("header.php");
?>

<div class="container">
	<div class="choose" style="border:solid #526069 1px;">
		<h3 style="background-color:#526069;">Forma për Menaxhimin e Footer-it</h3>
		<div class="container">
			<div style="width:80%; text-align:center; margin:5% auto 2% auto;">
				<form action="add_footer.php" method="post" name="form1" class=" footer-bottom ">
					<table class="table table-responsive">
						<tbody>
							<tr>
								<td style="font-weight:bold; color:black;text-align: right;">Pershkrimi: </td>
								<td><input class="form-control" type="text" name="pershkrimi" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '© 2015 Goaway. All rights reserved | Design by W3layouts';}" /></td>

							</tr>
							<tr>
								<td style="font-weight:bold; color:black;text-align: right;">Linku: </td>
								<td><input class="form-control" type="text" name="link" /></td>

							</tr>

							<tr>
								<td style="font-weight:bold; color:black;text-align: right;">Ikonat: </td>
								<td><input class="form-control" type="text" name="ikonat" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '© 2015 Goaway. All rights reserved | Design by W3layouts';}" /></td>

							</tr>

						</tbody>
					</table>
					<div>

						<input class="contact-but-blue" type="submit" name="add_footer" value="Shto" />
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