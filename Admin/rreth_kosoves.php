<?php
include("header.php");
?>
<div class="container">

	<div class="choose" style="border:solid #333 1px;">
		<h3 style="background-color:#333;">Forma për Menaxhimin e menyse Reth Kosoves</h3>
		<div class="container">
			<div class="choos-girds">
				<div class="col-md-4 choos-grid">
					<span class="glyphicon5 glyphicon-plus" style="color:#337ab7 ;" aria-hidden="true"></span>
					<p>Forma për shtimin e perdoruesve.</p>
					<br>
					<button onclick="location.href='shto_user.php'" type="button" class="contact-but-blue">
						Shto</button>
				</div>

				<div class="col-md-4 choos-grid">
					<span class="glyphicon5 glyphicon-pencil" style="color:#5cb85c ;" aria-hidden="true"></span>
					<p>Forma për modifikimin e perdoruesve.</p>
					<br>
					<button onclick="location.href='modifiko_user.php'" type="button" class="contact-but-green">
						Modifiko</button>
				</div>

				<div class="col-md-4 choos-grid">
					<span class="glyphicon5 glyphicon-remove" style="color:#d9534f ;" aria-hidden="true"></span>
					<p>Forma për fshirjen e perdoruesve.</p>
					<br>
					<button onclick="location.href='fshij_user.php'" type="button" class="contact-but-red">
						Fshijë</button>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>

</div>
<!-- footer -->

<?php
include("footer.php");
?>