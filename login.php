<?php
    require 'includes/common.php';
    
    if(isset($_SESSION['email'])){
        header('location : products.php');
        exit;
    }
    
    if($_GET['login_error']){
        $error = $_GET['login_error'];
    }
    else{
        $error = 'Login to make a purchase.';
    }

?>
<!DOCTYPE html>

<html>
    <head>
        <title>Log In - Life's Trend Store</title>
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
        
        <!-- Login Form -->
        <div class="container">
            <div id="signup-form"> <!-- Same Design of SignUp Form -->
            <div class="row">
                <div class="col-xs-10 col-sm-8 col-md-6 col-lg-4 col-xs-offset-1 col-sm-offset-2 col-md-offset-3 col-lg-offset-4">  <!--To find offset value use B-Centering Formula : (12-n)/2 where n is the grid defined -->
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>LOGIN</h3>
                    </div>
                    <div class="panel-body">
                        <div class="text-warning"><p><?php echo $error;?></p></div>
                        <form class="form" method="POST" action="login_submit.php">
                            <div class="form-group">
                                <input class="form-control" id="email" name="Email" type="email" placeholder="Email *" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="password" name="Password" type="password" placeholder="Password *" required>
                            </div>
                            <center>
                         <div class="form-group">
                             <button class="btn btn-primary" id="submit" type="submit">Login</button>
                         </div>
                            </center>  
                        </form>
                    </div>
                    <center>
                    <div class="panel-footer">
                        Don't have an account? <a href="signup.php" target="_self">Register Here <i class="glyphicon glyphicon-user"></i></a>
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
