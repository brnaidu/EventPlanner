<?php ob_start();
include "secure.php";
include "config.php";
extract($_POST);
extract($_GET);
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from shapebootstrap.net/demo/html/flat_theme/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Jul 2015 15:45:31 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Events</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    
    <!-- Bootstrap -->
    <link href="assests/css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap-theme.css" rel="stylesheet">

    <!-- siimple style -->
    <link href="assets/css/style.css" rel="stylesheet">
    
    <link href="assets/hosting.css" rel="stylesheet">
    
     <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
     
      <link href="assets/tablediv.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="assets/auto.css" />
    
</head><!--/head-->
<body class="modal-open">
    <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
        <div class="container">
            <div class="navbar-header">
               
               <h1>Event <strong style="color:
               #FF8000">Planner</strong></h1>
            </div>
                <?php include "header.php"; ?>
            </div>
        </div>
    </header><!--/header-->


    <section id="services" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="media">
					<div>
                       
                       </div>
            </div>
        </div>
        </div>
        </div>
    </section><!--/#services-->

 
    <section id="recent-works">
        <div class="container">
            <div class="row">
                <div  class="col-md-2">
                  <?php include "alerts.php"; ?> 
                   <?php include('sidebar_dashboard.php'); ?>
       
                </div>
               
                <div class="col-md-10">
                 <?php include('topbar_dashboard.php'); ?>
                  <?php include('middle.php'); ?>
                    
                        </div>
                    
            </div><!--/.row-->
        </div>
    </section><!--/#recent-works-->

    

    <!--/#bottom-->

    <footer id="footer" class="midnight-blue">
    <?php include "footer.php"; ?>
         </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>

<!-- Mirrored from shapebootstrap.net/demo/html/flat_theme/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Jul 2015 15:46:27 GMT -->
</html>