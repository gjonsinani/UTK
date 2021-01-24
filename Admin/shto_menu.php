<?php
include("header.php");
?>

<div class="container">
    <div class="choose" style="border:solid #526069 1px;">
        <h3 style="background-color:#526069;">Forma për Menaxhimin e Menyve</h3>
        <div class="container">
            <div style="width:80%; text-align:center; margin:5% auto 2% auto;">
                <form action="add_menu.php" method="post" name="form1" class=" footer-bottom ">
                    <table class="table table-responsive">
                        <tbody>
                            <tr>
                                <td style="font-weight:bold; color:black;text-align: right;">Emri: </td>
                                <td><input class="form-control" type="text" name="emri" /></td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold; color:black;text-align: right;">Linku: </td>
                                <td><input class="form-control" type="text" name="link" /></td>
                            </tr>
                        </tbody>
                    </table>
                    <div>

                        <input class="contact-but-blue" type="submit" name="add_menu" value="Shto" />
                </form>
            </div>

            </form>
            <div class="clearfix"></div>
        </div>


    </div>
</div>
<?php
include("footer.php");
?>