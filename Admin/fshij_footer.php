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
<div class="choose" style="width:80%; margin-left:10%">
    <form action="" method="post">
        <table style="width: 100%;">
            <tr>
                <h3 style="background-color: #333;">Kërko të dhënat e footerit për fshirje</h3>
            </tr>
            <tr>
                <td style="padding: 2%; ">
                    Shkruaj:
                </td>
                <td>
                    <input style="width: 100%;" type="text" name="term" placeholder="Kerko pershkrimin ose ikonen" />
                </td>
                <td style="padding: 2%; "> <input type="submit" value="Kërko" /></td>
            </tr>
            <table width='100%' border=0>
                <tr bgcolor='#CCCCCC'>
                    <td>Pershkrimi</td>
                    <td>Ikonat</td>
                    <td></td>

                </tr>
                <?php
                if (!empty($_REQUEST['term'])) {
                    $term = mysqli_real_escape_string($conn, $_REQUEST['term']);
                    $sql = mysqli_query($conn, "SELECT * FROM footer WHERE pershkrimi LIKE '%" . $term . "%' OR  ikonat LIKE '%" . $term . "%' ");
                    if (!$sql) {
                        printf("Error: %s\n", mysqli_error($conn));
                        exit();
                    }

                    while ($row = mysqli_fetch_array($sql)) {
                        echo '<tr style="padding:1%; widht:100%">';
                        echo '<td style="padding:1%;">' . $row['pershkrimi'] . "</td>";
                        echo '<td style="padding:1%;">' . $row['ikonat'] . "</td>";
                        echo "<td><a href=\"delete_footer.php?id_footer=$row[id_footer]\" onClick=\"return confirm('A jeni te sigurt se deshironi te fshini footer-in?')\" class='btn btn-danger'>Fshijë</a> </td>";			
                        echo "</tr>";
                    }
                }
                ?>
            </table>
</div>
<?php
include("footer.php");
?>