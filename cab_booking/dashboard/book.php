<?php
	require_once('auth.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
     <link rel="shortcut icon" href="../images/taxi.png" />

    <title>Quick Cabs -Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="startbootstrap-sb-admin-1.0.4/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="startbootstrap-sb-admin-1.0.4/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="startbootstrap-sb-admin-1.0.4/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="startbootstrap-sb-admin-1.0.4/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../dashboard/index.php">Quick Cabs</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION[SESS_FNAME].' '.$_SESSION[SESS_LNAME]; ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="../Views/home.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">

                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-bar-chart-o"></i> My Profile</a>
                    </li>
                    <li>
                        <a href="bills.php"><i class="fa fa-fw fa-table"></i> My Bills</a>
                    </li>
                    <li class="active">
                        <a href="book.php"><i class="fa fa-fw fa-edit"></i> Book a cab</a>
                    </li>
                     <li>
                        <a href="changepool.php"><i class="fa fa-fw fa-bar-chart-o"></i> Change Pool Status</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Book a Cab
                        </h1>
                        <ol class="breadcrumb">

                            <li class="active">
                                <i class="fa fa-edit"></i> Book Now
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">

                        <form role="form" method="post" action = "../Controllers/book.php" >

                            <div class="form-group">
                                <label>Source</label>
                                <select class="form-control" name="source">
                                    <option>New Delhi</option>
                                    <option>Mumbai</option>
                                    <option>Kolkata</option>
                                    <option>Chennai</option>
                                    <option>Bangalore</option>
                                </select>
                            </div>

                            <div class="form-group">


                                <input class="form-control" placeholder="Pick Up Location">
                                <br>


                            </div>

                             <div class="form-group">
                                <label>Destination</label>
                                <select class="form-control" name="dest">
                                    <option>New Delhi</option>
                                    <option>Mumbai</option>
                                    <option>Kolkata</option>
                                    <option>Chennai</option>
                                    <option>Bangalore</option>
                                </select>
                            </div>

                            <div class="form-group">


                                <input class="form-control" placeholder="Location">
                                <br>


                            </div>


                            <div class="form-group">
                                <label>Payment Method</label>
                                <label class="checkbox-inline">
                                    <input type="checkbox">By Cash
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox">Online Payment
                                </label>

                            </div>

                            <div class="form-group">
                                <label>Car Pool</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="yes" checked>Yes
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="no">No
                                    </label>
                                </div>

                            </div>
                                  <br>
                            <button type="submit" class="btn btn-default" name="submit">Submit Button</button>
                            <button type="reset" class="btn btn-default">Reset Button</button>

                        

                    </div>
					
                    

                    <div class="col-lg-6">

                    <div class="form-group">

                                <label>Journey Date</label>
                                <input class="form-control" type="date" name="date" placeholder="dd/mm/yy">
                                <br>


                            </div>
                            
                             <div class="form-group">

                                <label>Journey Time</label>
                                <input class="form-control" type="time" name = "time" >
                                <br>


                            </div>

                    </div>
					
					</form>
					
					
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
	

</body>

</html>
