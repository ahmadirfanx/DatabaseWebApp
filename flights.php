<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Admin</a>
            </div>

            <div class="header-right">
                <a href="login.html" class="btn btn-danger" title="Logout"><i class="fa fa-sign-out"></i> logout</a>


            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/user.png" class="img-thumbnail" />

                            <div class="inner-text">
                                teamX
                            <br />
                                <small></small>
                            </div>
                        </div>

                    </li>
   <ul class="nav nav-second-level collapse in">
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>Passengers<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                               <a href="users.php"><i class="fa fa-user"></i>View Passengers</a>
                            </li>
                            <li>
                               <a href="searchUsers.php"><i class="fa fa-setting"></i>Search Passengers</a>
                            </li>
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-desktop "></i>Bookings <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="flights.php"><i class="fa fa-plane"></i>View Bookings</a>
                            </li>
                            <li>
                                <a href="searchBooking.php"><i class="fa fa-bug "></i>Search Bookings</a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line"> Scheduled Flights </h1>
                        <h1 class="page-subhead-line"> List of all currently operating flights is displayed below. In case of any error contact management at <strong>f178090@nu.edu.pk</strong></h1>
                        <br>
                        <form method="POST">
                              <div class="col-md-6 col-sm-6 col-xs-12">
               
                            
                        
                        <?php include '../controller/flightControl.php'; ?>

                    </div>
                </form>
                </div>
                <!-- /. ROW  -->
            </div>
            <!-- /. PAGE INNER  -->
           
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

     

    <div id="footer-sec">
        &copy; | Developed By Students at FAST National University, Pakistan</a>
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

</body>
</html>
