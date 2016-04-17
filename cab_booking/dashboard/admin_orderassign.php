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
                <a class="navbar-brand" href="../dashboard/admin_index.php">Quick Cabs</a>
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
                        <a href="admin_index.php"><i class="fa fa-fw fa-bar-chart-o"></i> My Profile</a>
                    </li>
                    <li>
                        <a href="admin_neworders.php"><i class="fa fa-fw fa-table"></i>New Orders</a>
                    </li>
                     <li  class="active">
                        <a href="admin_orderassign.php"><i class="fa fa-fw fa-table"></i>Order Assignment</a>
                    </li>
                    <li>
                        <a href="admin_history.php"><i class="fa fa-fw fa-edit"></i>Order History</a>
                    </li>
                     <li>
                        <a href="admin_feedback.php"><i class="fa fa-fw fa-edit"></i>Customer Feedback</a>
                    </li>
                     <li>
                        <a href="assignpool.php"><i class="fa fa-fw fa-table"></i>Assign Pool</a>
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
                           Orders Assignment
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
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i>Drivers Available</h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-responsive table-hover">
                                    <thead>
                                        <th>Driver ID</th>
                                        <th>Driver Username</th>
                                        <th>Driver Name</th>
                                        <th>Address</th>
                                        <th>Phone</th>
                                    </thead><?php 
                                    require_once '../Controllers/connection.php';
                                    
                                    $sql = "SELECT * FROM user WHERE role=2";
                                    $res = mysql_query($sql);
                                    
                                    while($row = mysql_fetch_assoc($res)){
                                        ?>
                                        <tr>
                                            <td><?php echo $row[id];?></td>
                                            <td><?php echo $row[usename];?></td>
                                            <td><?php echo $row[first_name].' '.$row[last_name];?></td>
                                            <td><?php echo $row[address];?></td>
                                            <td><?php echo $row[phone];?></td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                 </table>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
                
                
                
                 <div class="row">
                    
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i>Drivers Allocation To Orders</h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-responsive table-hover">
                                    <thead>
                                        <th>Bill Number</th>
                                        <th>Customer Username</th>
                                        <th>Source</th>
                                        <th>Destination</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Driver ID</th>
                                       
                                    </thead><?php 
                                    require_once '../Controllers/connection.php';
                                    
                                    $sql = "SELECT * FROM book WHERE completed=0 AND driver_id=0";
                                    $res = mysql_query($sql);
                                    
                                    while($row = mysql_fetch_assoc($res)){
                                        ?>
                                        <tr>
                                            <td><?php echo $row[bill_no];?></td>
                                            <td><?php echo $row[cust_username];?></td>
                                            <td><?php echo $row[source].' '.$row[last_name];?></td>
                                            <td><?php echo $row[destination];?></td>
                                            <td><?php echo $row[date];?></td>
                                            <td><?php echo $row[time];?></td>
                                            <form action="../Controllers/orderassign.php?billno=<?php echo $row[bill_no]; ?>" method="POST">
                                            <td>
                                                <div class="form-group">
                                                <select class="form-control" name="selects">
                                                    <option disabled selected>SELECT</option>
                                                    <?php
                                                        require_once '../Controllers/connection.php';
                                                        
                                                        $que = "SELECT id FROM user WHERE role=2";
                                                        $result = mysql_query($que);
                                                        while($rows = mysql_fetch_assoc($result)){
                                                            ?>
                                                            <option><?php echo $rows[id];?></option>
                                                    <?php       
                                                        }
                                                    ?>  
                                                </select>
                                                </div>
                                            </td>
                                            
                                            <td><button type="submit" class="btn bg-primary">Assign Driver</button></td>
                                            </form>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                 </table>
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