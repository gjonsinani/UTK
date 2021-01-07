<?php
//including the database connection file
include("header.php");
include_once("config.php");


//fetching data in descending order (lastest entry first)
$result = mysqli_query(
    $conn,
    "SELECT * FROM users ORDER BY uid DESC "
);
?>
<!---->
<div class="contact">
    <div class="container">
        <div class="choose d-choose">

            <h3 class="t-h3">Kërko të dhënat e perdoruesit për modifikim</h3>

            <div class="d-form">
                <form action="" method="post" class=" footer-bottom ">
                    <div style="width: 70%; text-align: center; margin:0 15% 2% 15%;">
                        <div class="input-group">
                            <input type="text" name="term" class="form-control" placeholder="Emri ose email">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">Kërko</button>
                            </span>
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
            </div>
            <div class="table-responsive" style="width: 100%;">
                <table class="table" style="width: 100%; text-align: center;">
                    <thead>
                        <tr>
                            <th>Perdouesi</th>
                            <th>Email</th>
                            <th>Fjalekalimi</th>
                            <th class="t-th">Modifiko</th>
                        </tr>
                    </thead>
                    <tbody style="line-height: 0;text-align: center;">
                        <?php
                        if (!empty($_REQUEST['term'])) {
                            $term = mysqli_real_escape_string($conn, $_REQUEST['term']);
                            $sql = mysqli_query($conn, "SELECT * FROM users WHERE username LIKE '%" . $term . "%' OR email LIKE '%" . $term . "%' ");
                            if (!$sql) {
                                printf("Error: %s\n", mysqli_error($conn));
                                exit();
                            }

                            while ($row = mysqli_fetch_array($sql)) {

                                echo "<tr>";
                                echo "<td>" . $row['username'] . "</td>";
                                echo "<td>" . $row['email'] . "</td>";
                                echo "<td>" . $row['password'] . "</td>";
                                echo "<td><a href=\"update_user.php?uid=$row[uid]\" class='contact-but-green' style='text-decoration:none;' type='submit'>
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