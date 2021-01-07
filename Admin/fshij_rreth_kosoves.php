<?php
//including the database connection file
include("header.php");
include_once("config.php");


//fetching data in descending order (lastest entry first)
$result = mysqli_query(
    $conn,
    "SELECT * FROM footer ORDER BY id_footer DESC "
);
?>




<div class="contact">
	 <div class="container">
	 	<div class="choose d-choose">
			
				<h3 class="t-h3">Forma për fshirjen e ikonave informuese</h3>
           
            <div class="d-form" >
                <form action="" method="post" class=" footer-bottom ">
                	<div style="width: 70%; text-align: center; margin:0 15% 2% 15%;">
					    <div class="input-group">
					      <input type="text" name="term" class="form-control" placeholder="Pershkrimi ose ikona">
					      <span class="input-group-btn">
					        <button class="btn btn-default" type="submit">Kërko</button>
					      </span>
					    </div><!-- /input-group -->
  					</div><!-- /.col-lg-6 -->
			</div>
					<div class="table-responsive" style="width: 100%;">
                    <table class="table" style="width: 100%;">
                        <thead>
                        	<tr>
								<th class="t-th">Ikona</th>
								<th class="t-th">Titulli</th>
	                            <th class="t-th">Pershkrimi</th>
	                            <th class="t-th">Fshijë</th>
                            </tr>
                        </thead>
                        <tbody style="line-height: 0;text-align: center;">
                        	<?php
								if (!empty($_REQUEST['term'])) {
								$term = ($_REQUEST['term']);     
                                $sql = mysqli_query($conn, "SELECT * FROM rrethkosoves WHERE pershkrimi LIKE '%" . $term . "%' OR  titulli LIKE '%" . $term . "%' ");
								while($row = mysqli_fetch_array($sql)) { 		
										echo "<tr>";
										echo "<td>".$row['ikona']."</td>";
										
										echo "<td>".$row['titulli']."</td>";
										echo "<td>".$row['pershkrimi']."</td>";
										echo "<td><a href=\"delete_rreth_kosoves.php?id_rrk=$row[id_rrk]\" class='contact-but-red' style='text-decoration:none;' type='submit'>
										Fshijë</a></td></tr>";		
						}

					}

					?>
                            
	                    </tbody>
	                </table>
                    </div>           
                    </form>
                <div class="clearfix"></div>
			</div>
			
		 </div>
	 </div>
        

<?php
include("footer.php");
?>