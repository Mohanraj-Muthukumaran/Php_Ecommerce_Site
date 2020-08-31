<?php
    require 'includes/common.php';
    
    if(!isset($_SESSION['email'])){
        header('location: index.php');
        exit;
    }
    
    if($_GET['update_error']){
        $error = $_GET['update_error'];
    }
    else{
        $error = "Update your password here!";
    }
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Profile Update - Life's Trend Store</title>
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
        
        
        <!-- Profile Update - Content of the page! -->
         <div class="container">
            <div id="signup-form"> <!-- Same Style of the SignUp Form -->
            <div class="row">
                <div class="col-xs-10 col-sm-8 col-md-6 col-lg-4 col-xs-offset-1 col-sm-offset-2 col-md-offset-3 col-lg-offset-4">  <!--To find offset value use B-Centering Formula : (12-n)/2 where n is the grid defined -->
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>CHANGE PASSWORD</h3>
                    </div>
                    <div class="panel-body">
                        <div class="text-warning"><p><?php echo $error;?></p></div>
                        <form class="form" method="POST" action="settings_script.php">
                            <div class="form-group">
                                <input class="form-control" id="old_password" name="Old_Password" type="password" placeholder="Old Password *" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="new_password" name="New_Password" type="password" placeholder="New Password *" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" minlength="6" required>
                                 <small><label class="text-info" for="new_password">Must contain a uppercase letter, a lowercase letter and a number!</label></small>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="confirm_password" name="Confirm_Password" type="password" placeholder="Confirm Password *" required>
                            </div>
                            <center>
                         <div class="form-group">
                             <button class="btn btn-primary" id="submit" type="submit">Change</button>
                         </div>
                            </center>  
                        </form>
                    </div>
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
