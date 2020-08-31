<?php
    require 'includes/common.php';
    
    if(isset($_SESSION['email'])){
        header('location: products.php');
        exit;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Life's Trend Store</title>
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
        <!-- Navbar of the Page -->
        <?php
            include 'includes/header.php';
        ?>
        <!-- Banner Image of the Site -->
        
        <div id="banner-image">
            <center>
            <div class="container">
                <div id="banner-content">
                    <h2>Be Trend With Life's Trend.</h2>
                    <p>Flat 40% OFF on premium brands</p><br>
                    <a class="btn btn-danger btn-lg active" href="login.php" target="_self">Shop Now</a>
                </div>   
            </div>
            </center>    
        </div>
        
        
        <div class="container">
            <div class="row">
                <center>
                <div class="col-xs-12 col-md-8 col-lg-4">
                    <div class="thumbnail">
                        <a href="login.php" target="_self">
                        <img class="img-responsive" src="image/2.jpg" alt="Cameras">
                        <div class="caption">
                            <h2><strong>Cameras</strong></h2>
                            <p>Choose among the best available in the world.</p>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-8 col-lg-4">
                    <div class="thumbnail">
                        <a href="login.php" target="_self">
                        <img class="img-responsive" src="image/10.jpg" alt="Watches">
                        <div class="caption">
                            <h2><strong>Watches</strong></h2>
                            <p>Original watches from the best brands.</p>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-8 col-lg-4">
                    <div class="thumbnail">
                        <a href="login.php" target="_self">
                        <img class="img-responsive" src="image/6.jpg" alt="Shirts">
                        <div class="caption">
                            <h2><strong>Shirts</strong></h2>
                            <p>Our exquisite collection of shirts.</p>
                        </div>
                        </a>
                    </div>
                </div>
                </center>
            </div>
        </div>
        <br><br><br>
        
        
        <!-- Footer of the Page -->
        <?php 
            include 'includes/footer.php';
        ?>
    </body>
</html>
