<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
include("header.php");


?>
<head>
<title>Menagjo Komunat</title>
</head>
<body>
	 <div class="container">

<div class="choose border-dark-1px">
	 <h3 class="bg-color-dark">Forma për Menaxhimin e Komunave</h3>
	 <div class="container">		 
		 <div class="choos-girds">

			<div class="col-md-4 choos-grid">
				<span class="glyphicon5 glyphicon-plus" style="color:#337ab7 ;" aria-hidden="true"></span>
				<p>Shto Komunë të re</p>
				<br>
				<button onclick="location.href='shto_komune.php'" type="button" class="contact-but-blue">
							Shto</button>
			</div>

			<div class="col-md-4 choos-grid">
				<span class="glyphicon5 glyphicon-pencil" style="color:#5cb85c ;" aria-hidden="true"></span>
				<p>Modifiko Komunë ekzistuese</p>
				<br>
				<button onclick="location.href='modifiko_komune.php'" type="button" class="contact-but-green">
							Modifiko</button>
			</div>

			<div class="col-md-4 choos-grid">
				<span class="glyphicon5 glyphicon-remove" style="color:#d9534f ;" aria-hidden="true"></span>
				<p>Fshijë Komunë ekzistuese</p>
				<br>
				<button onclick="location.href='fshije_komune.php'" type="button" class="contact-but-red">
							Fshijë</button>
			</div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
</div>


	
		 
				 
	</div>			 
<div class="clearfix"></div>
		 	 
	


<?php
include 'footer.php';
?>