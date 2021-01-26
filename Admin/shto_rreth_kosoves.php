<?php
include("header.php");
?>

<div class="container">
	<div class="choose" style="border:solid #526069 1px;">
		<h3 style="background-color:#526069;">Forma për Menaxhimin e menyse Reth Kosoves</h3>
		<div class="container">
			<div style="width:80%; text-align:center; margin:5% auto 2% auto;">
				<form enctype="multipart/form-data" action="add_rreth_kosoves.php" method="post" name="form1" class=" footer-bottom ">
					<table class="table table-responsive">
						<tbody>
							<tr>
								<td style="font-weight:bold; color:black;text-align: right;">Ikona: </td>
								<td><input class="form-control" type="text" name="ikona" /></td>

							</tr>
							<tr>
								<td style="font-weight:bold; color:black;text-align: right;">Titulli: </td>
								<td><input class="form-control" type="text" name="titulli" /></td>

							</tr>

							<tr>
								<td style="font-weight:bold; color:black;text-align: right;">Pershkrimi: </td>
								<td> <textarea name="pershkrimi" class="form-control" id="exampleFormControlTextarea1" rows="5" style="resize: none;"></textarea>
								</td>

							</tr>
							<tr>
								<td><input type="hidden" name="MAX_FILE_SIZE" value="10000000" /></td>
								<td><input name="userfile" type="file" /></td>
							</tr>


						</tbody>
					</table>
					<div>

						<input class="contact-but-blue" type="submit" name="add_rreth_kosoves" value="Shto" />
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