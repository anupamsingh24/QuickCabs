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
  


      

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="page-header">
                           Customer Feedback
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Please provide your valuable feedback which will help us in improving our services.
                            </li>
                        </ol>
                    </div>
                </div>
                <?php 
                    require_once '../Controllers/connection.php';
                    
                    $sql = "SELECT * FROM book WHERE bill_no=$_GET[billno]";
                    $res = mysql_query($sql);
                    
                    $row = mysql_fetch_assoc($res);
                    
                        $que = "SELECT * FROM user WHERE id=(SELECT driver_id FROM book WHERE bill_no=$_GET[billno])";
                        $results = mysql_query($que);
                        
                        $rw = mysql_fetch_assoc($results);
                        mysql_close($bd);
                      ?>
                
                 <div class="row">
                    
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Feedback</h3>
                            </div>
                            <div class="panel-body">
                 <form class="form-horizontal" action="../Controllers/feedback.php?billno=<?php echo $row[bill_no]; ?>" method="POST">
                    <fieldset>
                       
                      <div class="form-group">
                        <label for="inputName3" class="col-sm-2 control-label">Bill Number</label>
                        <div class="col-sm-10">
                          <input disabled type="text" class="form-control" id="inputEmail3" placeholder="Username" name="billno" value="<?php echo $row[bill_no]; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Source</label>
                        <div class="col-sm-10">
                          <input disabled type="text" class="form-control" id="inputPassword3" placeholder="Password" name="password" value="<?php echo $row[source]; ?>">

                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="inputName3" class="col-sm-2 control-label">Destination</label>
                        <div class="col-sm-10">
                          <input disabled type="text" class="form-control" id="inputName3" placeholder="First Name" name="fname" value="<?php echo $row[destination]; ?>">
                        </div>
                      </div>
                      
                       <div class="form-group">
                        <label for="inputName3" class="col-sm-2 control-label">Driver ID</label>
                        <div class="col-sm-10">
                          <input disabled type="text" class="form-control" id="inputEmail3" placeholder="Last Name" name="driver_id" value="<?php echo $row[driver_id];?>">
                        </div>
                      </div>
                     
                       <div class="form-group">
                        <label for="inputName3" class="col-sm-2 control-label">Driver Name</label>
                        <div class="col-sm-10">
                          <input type="text" disabled  class="form-control" id="inputEmail3"  name="address" value="<?php echo $rw[first_name].' '.$rw[last_name]; ?>">
                        </div>
                      </div>
                      
                       <div class="form-group">
                        <label for="inputName3" class="col-sm-2 control-label">Driver's Phone</label>
                        <div class="col-sm-10">
                          <input disabled type="text" class="form-control" id="inputEmail3"  name="phone" value="<?php echo $rw[phone];?>">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="inputName3" class="col-sm-2 control-label">Rating (Out of 5)</label>
                        <div class="col-sm-10">
                          <select required class="form-control" id="inputEmail3"  name="rating" >
                              <option disabled selected>SELECT YOUR OPTION</option>
                              <option value="1">1 (Very Bad)</option>
                              <option value="2">2 (Bad)</option>
                              <option value="3">3 (Average)</option>
                              <option value="4">4 (Good)</option>
                              <option value="5">5 (Excellent)</option>
                          </select>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="inputName3" class="col-sm-2 control-label">Any Comments?</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" name="feed"></textarea>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-default">Submit</button>
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

    
   

</body>

</html>