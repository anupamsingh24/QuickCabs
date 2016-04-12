<!DOCTYPE html>
<html>
     <head>
        <title>Quick Cabs -Cab Service,Book a Cab, Online Cab Booking, Radio Taxi Cab</title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/bootstrap-theme.css">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="../images/taxi.png" />
        
        
    </head>
    <body>
        <?php
            include '../Views/header.php';
        ?>
        <div class="row">
            <div class="col-md-8">
                <form class="form-horizontal" action="../Controllers/register.php" method="POST">
                    <fieldset>
                        <legend>REGISTER</legend>
                      <div class="form-group">
                        <label for="inputName3" class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="Username" name="username">
                          <span class="error">
                                  <?php                             
                                        if(isset($_GET[userErr]))
                                            echo "The Username is incorrect!";
                                   ?>       
                          </span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
                          <span>
                              <?php
                                        if(isset($_GET[passErr])){
                                            echo "The Password is incorrect!";
                                        }
                              ?>
                         </span>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> Remember me
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-default">Sign in</button>
                         <button type="button" class="btn btn-default" id="myBtn">Sign Up</button>
                        </div>
                      </div>
                    </fieldset>
                </form>
            </div>
            
        </div>



        <?php 
            include '../Views/footer.php';
        ?>
        </div>
        </body>
</html>