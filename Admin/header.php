<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
include("check.php");
?>
<!DOCTYPE html>
<html>



<head>
    <title>UTK</title>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/lightbox.css">
    <link rel="stylesheet" href="/css/fontawesome.min.css">
    <!-- Custom Theme files -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/style2.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom Theme files -->
    <!--//theme style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Goaway Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <script src="js/jquery.min.js"></script>
</head>

<body>
    <!-- header -->
    <div class="top-header">
        <div class="container">
            <div class="logo">
                <h1><a href="home.php"><span class="glyphicon glyphicon-road" aria-hidden="true"></span>UTK</a></h1>
            </div>
        </div>
    </div>
    <!---->
    <div class="top-menu">
        <div class="container">
            <div class="content white">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!--/navbar header-->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                             <li><a href="home.php">Ballina</a></li>
                             <li><a href="rreth_kosoves.php">Rreth Kosovës</a></li>
                             <li><a href="kontakt.php">Kontakti</b></a> </li>
                             <li><a href="pikat_turistike.php">Pikat Turistike</b></a> </li>
                             <li><a href="users.php">Përdoruesit</a></li>
                             <li> <a href="logout.php">Çkyçu</a> </li>
                        </ul>
                        

                    </div>

                    <!--/navbar collapse-->
                </nav>
                <!--/navbar-->
            </div>
            <div class="clearfix"></div>
            <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
        </div>
    </div>
    <br><h4 class="text-right" style="margin-right: 5%;"> Pershendetje, <?php echo $login_user; ?>!</h4>
    <br>