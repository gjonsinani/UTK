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
<div class="choose" style="width:80%; margin-left:10%">
    <form action="" method="post">
        <table style="width: 100%;">
            <tr>
                <h3 style="background-color: #333;">Kërko të dhënat e perdoruesit për fshirje</h3>
            </tr>
            <tr>
                <td style="padding: 2%; ">
                    Shkruaj:
                </td>
                <td>
                    <input style="width: 100%;" type="text" name="term" placeholder="Kerko perdoruesin" />
                </td>
                <td style="padding: 2%; "> <input type="submit" value="Kërko" /></td>
            </tr>
            <table width='100%' border=0>
                <tr bgcolor='#CCCCCC'>
                    <td>Perdoruesi</td>
                    <td>Fjalekalimi</td>
                    <td></td>

                </tr>
                <?php
                if (!empty($_REQUEST['term'])) {
                    $term = mysqli_real_escape_string($conn, $_REQUEST['term']);
                    $sql = mysqli_query($conn, "SELECT * FROM users WHERE username LIKE '%" . $term . "%'");
                    if (!$sql) {
                        printf("Error: %s\n", mysqli_error($conn));
                        exit();
                    }

                    while ($row = mysqli_fetch_array($sql)) {
                        echo '<tr style="padding:1%; widht:100%">';
                        echo '<td style="padding:1%;">' . $row['username'] . "</td>";
                        echo '<td style="padding:1%;">' . $row['password'] . "</td>";
                        echo "<td><a href=\"delete_user.php?uid=$row[uid]\" onClick=\"return confirm('A jeni te sigurt se deshironi te fshini perdoruesin?')\" class='btn btn-danger'>Fshijë</a> </td>";			
                        echo "</tr>";
                    }
                }
                ?>
            </table>
</div>
<?php
include("footer.php");
?>