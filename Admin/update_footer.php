<?php
// including the database connection file
include("header.php");
include_once("config.php");

if (isset($_POST['update_footer'])) {
	$id_footer = $_POST['id_footer'];
	$pershkrimi = $_POST['pershkrimi'];
	$ikonat = $_POST['ikonat']; {
		//updating the table
		$result = mysqli_query($conn, "UPDATE footer SET pershkrimi='$pershkrimi', ikonat='$ikonat'  WHERE id_footer=$id_footer");

		//redirectig to the display message. In our case, it is home.php
		header("Location: home.php");
	}
}
?>
<?php
//getting id_footer from url
$id_footer = $_GET['id_footer'];

//selecting data associated with this particular id_footer
$result = mysqli_query($conn, "SELECT * FROM footer WHERE id_footer=$id_footer");

while ($res = mysqli_fetch_array($result)) {
	$pershkrimi = $res['pershkrimi'];
	$ikonat = $res['ikonat'];
}
?>

<div class="container">
	<form class=" footer-bottom " enctype="multipart/form-data" name="form1" method="post" action="update_footer.php">

		<div class="choose" style="border:solid #526069 1px;">
			<h3 style="background-color:#526069;">Forma për Menaxhimin e Footer-it</h3>
			<div class="container">
				<div style="width:80%; text-align:center; margin:5% auto 2% auto;">

					<table class="table table-responsive">
						<tbody>
							<tr>
								<td style="font-weight:bold; color:black;text-align: right;">Pershkrimi: </td>
								<td>
									<textarea name="pershkrimi" class="form-control" id="exampleFormControlTextarea1" rows="5" style="resize: none;"><?php echo $pershkrimi; ?></textarea>
								</td>
							</tr>
							<tr>
								<td style="font-weight:bold; color:black;text-align: right;">Ikonat: </td>
								<td><input type="text" name="ikonat" class="form-control" value="<?php echo $ikonat; ?>" /></td>
							</tr>
						</tbody>
					</table>
					<input type="hidden" name="id_footer" value='<?php echo $_GET['id_footer']; ?>' />
					<input class="contact-but-blue" type="submit" name="update_footer" value="Modifiko" />
					<div>

	</form>
</div>


<div class="clearfix"></div>
</div>


</div>
</div>

<?php
include("footer.php");
?>