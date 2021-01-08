<?php
include("header.php");
?>



<div class="banner">
	<div class="container">
		<div class="banner-grids">
		</div>
	</div>
</div>
<div class="choose">

	<div class="container">

		<div class="choos-girds">
			<?php
			$result = mysqli_query($conn, "SELECT * FROM rrethkosoves order by id_rrk  ");
			while ($row = mysqli_fetch_array($result)) {
				extract($row);
				if ($result == null)
					mysqli_free_result($result);
			?>

				<div class="col-md-4 choos-grid" style="padding: 5%;">
					<a style="padding: 0; margin:0; " href="#<?php echo $id_rrk; ?>">
						<span class="glyphicon5 glyphicon-<?php echo $ikona; ?>" aria-hidden="true"></span>
						<h4><?php echo $titulli; ?></h4>

				</div>
			<?php } ?>
		</div>

		<div class="clearfix"></div>


	</div>

</div>
</div>
<div class="about">
	<?php
	$result = mysqli_query($conn, "SELECT * FROM rrethkosoves order by id_rrk  ");
	while ($row = mysqli_fetch_array($result)) {
		extract($row);
		if ($result == null)
			mysqli_free_result($result);
	?>

		<div class="container" style="height: 30vh; margin:auto; width:100%;" id="<?php echo $id_rrk; ?>">


			<div class="about-grids">

				<div class="col-md-6 about-list">
					<h3><?php echo $titulli; ?></h3>
					<br>
					<br>
					<ul>
						<li><?php echo $pershkrimi; ?></li>
					</ul>
				</div>
				<div class="col-md-6 about-pic">
					<span class="glyphicon5 glyphicon-<?php echo $ikona; ?>" aria-hidden="true"></span>

				</div>
				<div class="clearfix"></div>
			</div>


		</div>
	<?php } ?>
</div>

<?php
include("footer.php");
?>