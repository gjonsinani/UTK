<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<head>
<title>Events Managements</title>
</head>

<?php 
include("header.php");


?>
<body>
	 <div class="container">

<div class="choose border-dark-1px">
	 <h3 class="bg-color-dark">Forma për Menaxhimin e Eventeve</h3>
	 <div class="container">		 
		 <div class="choos-girds">

			<div class="col-md-4 choos-grid">
				<span class="glyphicon5 glyphicon-plus" style="color:#337ab7 ;" aria-hidden="true"></span>
				<p>Shto Eventet te ri</p>
				<br>
				<button onclick="location.href='addevent.php'" type="button" class="contact-but-blue">
							Shto</button>
			</div>

			<div class="col-md-4 choos-grid">
				<span class="glyphicon5 glyphicon-pencil" style="color:#5cb85c ;" aria-hidden="true"></span>
				<p>Modifiko Eventet ekzistuese</p>
				<br>
				<button onclick="location.href='editevent.php'" type="button" class="contact-but-green">
							Modifiko</button>
			</div>

			<div class="col-md-4 choos-grid">
				<span class="glyphicon5 glyphicon-remove" style="color:#d9534f ;" aria-hidden="true"></span>
				<p>Fshi Eventet ekzistuese</p>
				<br>
				<button onclick="location.href='deleteevent.php'" type="button" class="contact-but-red">
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