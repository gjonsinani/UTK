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

		<div class="container" id="<?php echo $id_rrk; ?>">


			<div class="about-grids" style="height: 30vh; width:100%; cursor: text; ">
				<!-- <div class="col-md-6 about-pic" style="padding: 5% 0%; text-align:center;" >
					<span class="glyphicon5 glyphicon-<?php echo $ikona; ?>" aria-hidden="true"></span>

				</div> -->
				<div class="col-md-6 about-pic" data-aos="fade-right">
					<?php echo '<img alt="" class="img-responsive" width="100%" height="100%" src="data:images/jpeg;base64,' . base64_encode($row['images']) . '"/>'; ?>
				</div>


				<div class="col-md-6 about-list" data-aos="fade-left">
					<h3 style="padding: 5% 0; "><?php echo $titulli; ?></h3>
					<ul>
						<li style="text-align: justify; cursor:text;"><?php echo $pershkrimi; ?></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>


		</div>
	<?php } ?>
</div>

<?php
include("footer.php");
?>