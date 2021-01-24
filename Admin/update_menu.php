<?php
// including the database connection file
include("header.php");
include_once("config.php");

if (isset($_POST['update_menu'])) {
	$id_menu = $_POST['id_menu'];
	$emri = $_POST['emri'];
	$link = $_POST['link'];
	if (empty($emri) || empty($link)) {

		if (empty($emri)) {
			echo "<font color='red'>Emri field is empty.</font><br/>";
		}

		if (empty($link)) {
			echo "<font color='red'>Linku field is empty.</font><br/>";
		}
	} else {

		mysqli_query($conn, "SET @id_menu = ${id_menu}");
		mysqli_query($conn, "SET @emri = '${emri}'");
		mysqli_query($conn, "SET @link = '${link}'");
		$result = mysqli_query($conn, "CALL updateMenu(@id_menu,@emri,@link)");


		//redirectig to the display message. In our case, it is home.php
		header("Location: home.php");
	}
}
?>
<?php
//getting id_footer from url
$id_menu = $_GET['id_menu'];

//selecting data associated with this particular id_footer
$result = mysqli_query($conn, "SELECT * FROM menyte WHERE id_menu=$id_menu");

while ($res = mysqli_fetch_array($result)) {
	$emri = $res['emri'];
	$link = $res['link'];
}
?>

<div class="container">
	<form class=" footer-bottom " enctype="multipart/form-data" name="form1" method="post" action="update_menu.php">

		<div class="choose" style="border:solid #526069 1px;">
			<h3 style="background-color:#526069;">Forma për Menaxhimin e Menyve</h3>
			<div class="container">
				<div style="width:80%; text-align:center; margin:5% auto 2% auto;">

					<table class="table table-responsive">
						<tbody>
							<tr>
								<td style="font-weight:bold; color:black;text-align: right;">Emri: </td>
								<td><input type="text" name="emri" class="form-control" value="<?php echo $emri; ?>" /></td>
							</tr>
                            <tr>
								<td style="font-weight:bold; color:black;text-align: right;">Linku: </td>
								<td><input type="text" name="link" class="form-control" value="<?php echo $link; ?>" /></td>
							</tr>
						</tbody>
					</table>
					<input type="hidden" name="id_menu" value='<?php echo $_GET['id_menu']; ?>' />
					<input class="contact-but-blue" type="submit" name="update_menu" value="Modifiko" />
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