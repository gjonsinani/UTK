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
                <h1><a href="index.html"><span class="glyphicon glyphicon-road" aria-hidden="true"></span>Goaway</a></h1>
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
                            <li><a href="#">About</a></li>
                            <li class="active dropdown">
                                <a href="#" class="scroll dropdown-toggle" data-toggle="dropdown">Kontakt<b class="caret"></b></a>
                                <ul class=" dropdown-menu">
                                    <li><a href="kontakt.php">Kontakti</a></li>
                                    <li><a href="sygjerim.php">Sygjerimet</a></li>
                                </ul>
                            </li>
                            <li> <a href="logout.php">Logout</a> </li>
                            <li>
                                Pershendetje, <?php echo $login_user; ?>!
                            </li>
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
    <br>
    <br>