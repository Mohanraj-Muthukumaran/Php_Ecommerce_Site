<?php
    require 'includes/common.php';
    
    if(isset($_SESSION['email'])){
        header('location : products.php');
        exit;
    }
    if($_GET['signup_error']){
        $error = $_GET['signup_error'];
    }
    else{
        $error = 'Sign up to create an account.';
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up - Life's Trend Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Mohanraj Muthukumaran">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <!--Linking Bootstrap and jquery Using CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="css/index.css" rel="stylesheet" type="text/css">
    </head>
    <body>
       
        <!-- Navbar of Login Page -->
        
        <?php
            include 'includes/header.php';
            
        ?>
        
        <!-- Sign Up Form -->
        <div class="container">
            <div id="signup-form">
            <div class="row">
                <div class="col-xs-10 col-sm-8 col-md-6 col-lg-4 col-xs-offset-1 col-sm-offset-2 col-md-offset-3 col-lg-offset-4">  <!--To find offset value use B-Centering Formula : (12-n)/2 where n is the grid defined -->
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>SIGN UP</h3>
                    </div>
                    <div class="panel-body">
                        <div class="text-warning"><p><?php echo $error;?></p></div>
                        <form class="form" method="POST" action="signup_script.php">
                              <div class="form-group">
                                <input class="form-control" id="name" name="Name" type="text" placeholder="Full Name *" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" name="Email" type="email" placeholder="Email *" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="password" name="Password" type="password" placeholder="Password *" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" minlength="6" required>
                                <small><label class="text-info" for="password">Must contain a uppercase letter, a lowercase letter and a number!</label></small>
                            </div>
                              <div class="form-group">
                                <input class="form-control" id="contact" name="Contact" type="text" placeholder="Contact *" required>
                            </div>
                              <div class="form-group">
                                <input class="form-control" id="city" name="City" type="text" placeholder="City *" required>
                            </div>
                              <div class="form-group">
                                  <textarea class="form-control" id="address" name="Address" placeholder="Address *" rows="5" required></textarea>
                            </div>
                            <center>
                         <div class="form-group">
                             <button class="btn btn-primary" id="submit" type="submit">Sign Up</button>
                         </div>
                            </center>  
                        </form>
                    </div>
                    <center>
                    <div class="panel-footer">
                        Already registered? <a href="login.php" target="_self">Login Here <i class="glyphicon glyphicon-user"></i></a>
                    </div>
                    </center>
                </div>
                </div>
            </div>
            </div>
        </div>
        
        
        <!-- Footer of the Page -->
        
        <?php
            include 'includes/footer.php';
        ?>
        
    </body>
</html>
