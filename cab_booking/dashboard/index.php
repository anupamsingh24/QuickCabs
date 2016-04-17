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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> My Profile</a>
                    </li>
                    <li>
                        <a href="bills.php"><i class="fa fa-fw fa-bar-chart-o"></i> My Bills</a>
                    </li>
                    <li>
                        <a href="book.php"><i class="fa fa-fw fa-table"></i> Book A Cab</a>
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
                            My Profile
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

              
                <!-- /.row -->

               
                <!-- /.row -->

                <!-- /.row -->

                <div class="row">
                    
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> User Details</h3>
                            </div>
                            <div class="panel-body">
                                
             <form class="form-horizontal" action="../Controllers/update.php" method="POST">
                    <fieldset>
                       
                      <div class="form-group">
                        <label for="inputName3" class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-10">
                          <input type="text" disabled class="form-control" id="inputEmail3" placeholder="Username" name="username" value="<?php echo $_SESSION['SESS_USERNAME'] ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inPassword3" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                          <input type="password" disabled class="form-control" id="inPassword3" placeholder="Password" name="password">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inName3" class="col-sm-2 control-label">First Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" disabled id="inName3" placeholder="First Name" name="fname" value="<?php echo $_SESSION['SESS_FNAME'];  ?>">
                        </div>
                      </div>
                      
                       <div class="form-group">
                        <label for="inName4" class="col-sm-2 control-label">Last Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inName4" disabled placeholder="Last Name" name="lname" value="<?php echo $_SESSION['SESS_LNAME']; ?>">
                        </div>
                      </div>
                      
                       <div class="form-group">
                        <label for="inName5" class="col-sm-2 control-label">Address</label>
                        <div class="col-sm-10">
                          <textarea  class="form-control" disabled id="inName5"  name="address"><?php echo $_SESSION['SESS_ADDRESS']; ?></textarea>
                        </div>
                      </div>
                      
                       <div class="form-group">
                        <label for="inName6" class="col-sm-2 control-label">Phone</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" disabled id="inName6"  name="phone" value="<?php echo $_SESSION['SESS_PHONE'];?>">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button id="inName7" disabled type="submit" class="btn btn-default">Submit</button>
                        </div>
                        
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button  type="button" id="update" class="btn btn-default">Update Profile Details</button>
                        </div>
                      </div>
                    </fieldset>
                </form>
 
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script>
        
        $('#update').click(function(){
           $("#inPassword3").attr('disabled', !$("#inPassword3").attr('disabled'));
           $("#inName3").attr('disabled', !$("#inName3").attr('disabled'));
           $("#inName4").attr('disabled', !$("#inName4").attr('disabled'));
           $("#inName5").attr('disabled', !$("#inName5").attr('disabled'));
           $("#inName6").attr('disabled', !$("#inName6").attr('disabled'));
           $("#inName7").attr('disabled', !$("#inName7").attr('disabled'));
       
});
     </script>
    <!-- jQuery -->
    <script src="startbootstrap-sb-admin-1.0.4/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="startbootstrap-sb-admin-1.0.4/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="startbootstrap-sb-admin-1.0.4/js/plugins/morris/raphael.min.js"></script>
    <script src="startbootstrap-sb-admin-1.0.4/js/plugins/morris/morris.min.js"></script>
    <script src="startbootstrap-sb-admin-1.0.4/js/plugins/morris/morris-data.js"></script>

</body>

</html>