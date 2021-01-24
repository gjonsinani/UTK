<?php
//including the database connection file
include("header.php");
include_once("config.php");

//fetching data in descending order (lastest entry first)
$result = mysqli_query($conn, "CALL selectMenu()");


?>
<!---->
<div class="contact">
    <div class="container">
        <div class="choose d-choose">

            <h3 class="t-h3">Forma për modifikimin e Menyve</h3>

            <div class="d-form">
                <form action="" method="post" class=" footer-bottom ">
                    <div style="width: 70%; text-align: center; margin:0 15% 2% 15%;">
                        <div class="input-group">
                            <input type="text" name="term" class="form-control" placeholder="Emri ose Linku">
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
                            <th class="t-th">Emri</th>
                            <th class="t-th">Linku</th>
                            <th class="t-th">Modifiko</th>
                        </tr>
                    </thead>
                    <tbody style="line-height: 0;text-align: center;">
                        <?php
                        if (!empty($_REQUEST['term'])) {
                            $term = mysqli_real_escape_string($conn, $_REQUEST['term']);
                            $sql = mysqli_query($conn, "CALL selectTERMMenu('$term')");
                            while ($row = mysqli_fetch_array($sql)) {
                                echo "<tr>";
                                echo "<td>" . $row['emri'] . "</td>";
                                echo "<td>" . $row['link'] . "</td>";
                                echo "<td><a href=\"update_menu.php?id_menu=$row[id_menu]\" onClick=\"return confirm('Menyja juaj u modifikua me sukses!')\" class='contact-but-green' style='text-decoration:none;' type='submit'>
										Modifiko</a></td></tr>";
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