<?php
// including the database connection file
include("header.php");
include_once("config.php");

if (isset($_POST['update_rreth_kosoves'])) {
	$id_rrk = $_POST['id_rrk'];
	$ikona = $_POST['ikona'];
	$titulli = $_POST['titulli'];
	$pershkrimi = $_POST['pershkrimi'];
	$imgData = addslashes(file_get_contents($_FILES['userfile']['tmp_name']));
	$name = $_FILES['userfile']['name'];
	$maxsize = 10000000; //set to approx 10 MB

	if (empty($ikona) || empty($titulli) || empty($pershkrimi) || empty($imgData)) {

		if (empty($ikona)) {
			echo "<font color='red'>Ikona field is empty.</font><br/>";
		}

		if (empty($titulli)) {
			echo "<font color='red'>Titulli field is empty.</font><br/>";
		}

		if (empty($pershkrimi)) {
			echo "<font color='red'>Pershkrimi field is empty.</font><br/>";
		}
		if (empty($imgData)) {
			echo "<font color='red'>Foto field is empty.</font><br/>";
		}
	} else {
		//updating the table
		mysqli_query($conn, "SET @id_rrk = ${id_rrk}");
		mysqli_query($conn, "SET @ikona = '${ikona}'");
		mysqli_query($conn, "SET @titulli = '${titulli}'");
		mysqli_query($conn, "SET @pershkrimi = '${pershkrimi}'");
		mysqli_query($conn, "SET @imgData = '${imgData}'");
		mysqli_query($conn, "SET @name = '${name}'");
		$result = mysqli_query($conn, "CALL updateRrKs(@id_rrk,@ikona,@titulli,@pershkrimi,@imgData,@name)");
		if ($result) {
			//redirectig to the display pProgrami. In our case, it is admin.php
			header("Location: rrethkosoves.php");
		} else {
			die("Coudn't execute update procedure!");
		}
	}
}

?>
<?php
//getting id_footer from url
$id_rrk = $_GET['id_rrk'];

//selecting data associated with this particular id_footer
$result = mysqli_query($conn, "SELECT * FROM rrethkosoves WHERE id_rrk=$id_rrk");

while ($res = mysqli_fetch_array($result)) {
	$ikona = $res['ikona'];
	$titulli = $res['titulli'];
	$pershkrimi = $res['pershkrimi'];
}
?>

<div class="container">
	<form class=" footer-bottom " enctype="multipart/form-data" name="form1" method="post" action="update_rreth_kosoves.php">

		<div class="choose" style="border:solid #526069 1px;">
			<h3 style="background-color:#526069;">Forma për menaxhimin e ikonave informuese</h3>
			<div class="container">
				<div style="width:80%; text-align:center; margin:5% auto 2% auto;">

					<table class="table table-responsive">
						<tbody>
							<tr>
								<td style="font-weight:bold; color:black;text-align: right;">Ikona: </td>
								<td><input type="text" name="ikona" class="form-control" value="<?php echo $ikona; ?>" /></td>
							</tr>
							<tr>
								<td style="font-weight:bold; color:black;text-align: right;">Titulli: </td>
								<td><input type="text" name="titulli" class="form-control" value="<?php echo $titulli; ?>" /></td>
							</tr>
							<tr>
								<td style="font-weight:bold; color:black;text-align: right;">Pershkrimi: </td>
								<td>
									<textarea name="pershkrimi" class="form-control" id="exampleFormControlTextarea1" rows="5" style="resize: none;"><?php echo $pershkrimi; ?></textarea>
									<!-- <input type="text"  class="form-control"  /></td> -->
							</tr>
							<tr>
								<td><input type="hidden" name="MAX_FILE_SIZE" value="10000000" /></td>
								<td><input name="userfile" type="file" /></td>
							</tr>

						</tbody>
					</table>
					<input type="hidden" name="id_rrk" value='<?php echo $_GET['id_rrk']; ?>' />
					<input class="contact-but-blue" type="submit" name="update_rreth_kosoves" value="Modifiko" />
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