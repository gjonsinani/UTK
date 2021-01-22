<?php
//including the database connection file
include("header.php");
include_once("config.php");


//fetching data in descending order (lastest entry first)
$result = mysqli_query($conn, "CALL selectUser()");
// $result = mysqli_query(
//     $conn,
//     "SELECT * FROM users ORDER BY uid DESC "
// );
?>
<div class="contact">
    <div class="container">
        <div class="choose d-choose">

            <h3 class="t-h3">Forma për fshirjen e përdoruesve</h3>

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
                            <th>Perdoruesi</th>
                            <th>Email</td>
                            <th>Fjalekalimi</th>
                            <th class="t-th">Fshijë</th>
                        </tr>
                    </thead>
                    <tbody style="line-height: 0;text-align: center;">
                        <?php
                        if (!empty($_REQUEST['term'])) {
                            $term = mysqli_real_escape_string($conn, $_REQUEST['term']);
                            $sql = mysqli_query($conn, "CALL selectTERMUser('$term')");
                            while ($row = mysqli_fetch_array($sql)) {
                                echo "<tr>";
                                echo "<td>" . $row['username'] . "</td>";
                                echo "<td>" . $row['email'] . "</td>";
                                echo "<td>" . $row['password'] . "</td>";
                                echo "<td><a href=\"delete_user.php?uid=$row[uid]\" onClick=\"return confirm('Are you sure you want to delete?')\" class='contact-but-red' style='text-decoration:none;' type='submit'>
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