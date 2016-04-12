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
        
        <?php include '../Views/header.php'; ?>
        
        <div class="row">
            <div class="col-md-8">
                <h1>About Us</h1>
                <p class="text-justify">
                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                </p>
                <p class="text-justify">
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                
                </p>
            </div>
            <div class="col-md-4">
               <br>
                <br>
                <br>
                <form class="form-horizontal" action="../Controllers/login.php" method="POST">
                    <fieldset>
                        <legend>LOGIN</legend>
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
        <br>
        <aside>
            <div class="row bg-grey">
                    <div class="col-md-4">
                        <div class="img-responsive"><img src="../images/reliability.png"></div>
                        <div class="cont">
                            <h4 style="text-align:center">Reliability</h4>
                            <ul style="list-style-type:none">
                                <li>24 X 7 customer service.</li>
                                <li>GPS Enabled Cars</li>
                                <li>Well Trained, Courteous Chauffeurs</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="img-responsive"><img src="../images/responsibility.png"></div>
                        <div class="cont">
                            <h4 style="text-align:center">Responsibility</h4>
                            <ul style="list-style-type:none">
                                <li>Transparent Pricing</li>
                                <li>Always On Time</li>
                                <li>Value for Money</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="img-responsive"><img src="../images/convenience.png"></div>
                        <div class="cont">
                            <h4 style="text-align:center">Convenience</h4>
                            <ul style="list-style-type:none">
                                <li>TBook through App, Website and Phone</li>
                                <li>Multiple Payment Options – Quick and Easy</li>
                                <li>C
                                    lean and Comfortable Cars</li>
                            </ul>


                        </div>
                    </div>
            </div>
        </aside>
        <?php include '../Views/footer.php'; ?>
  </div>
</body>
  <script>
    var btn = document.getElementById('myBtn');
    btn.addEventListener('click', function() {
      document.location.href = '<?php echo "../Views/register.php"; ?>';
    });
  </script>

</html>