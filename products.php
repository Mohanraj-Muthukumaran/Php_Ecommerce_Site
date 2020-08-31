<?php
    require 'includes/common.php';
    
    if(!isset($_SESSION['email'])){
        header('location: index.php');
        exit;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Products - Life's Trend Store</title>
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
            include 'includes/check-if-added.php';
        ?>
        
        <!-- Products - Content of the page! -->
        
        <div class="container">
            <div class="row">
                <div class="jumbotron text-center">
                    <h1>Welcome to our Life's Trend Store!</h1>
                    <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
                </div>
            </div>
        </div>
        
        <!-- Cameras -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img class="img-responsive" src="image/5.jpg" alt="Cannon EOS">
                        <center>
                        <div class="caption">
                            <h3><strong>Cannon EOS</strong></h3>
                            <p><strong>Price: </strong>&#8377; 36000.00 Only.</p>
                            <?php
                                if(check_if_added_to_cart(1,$con)){
                             ?>    
                            <a href="cart.php"><button class="btn btn-primary btn-block" disabled>Added to Cart</button></a>                            
                            <?php
                                }
                                else{
                             ?>    
                            <a href="cart-add.php?id=1"><button class="btn btn-primary btn-block">Add to Cart</button></a>                                                        
                            <?php }?>                  
                        </div>
                        </center>
                    </div>
                </div>
                       
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img class="img-responsive" src="image/2.jpg" alt="Samsung DSLR">
                        <center>
                        <div class="caption">
                            <h3><strong>Samsung DSLR</strong></h3>
                            <p><strong>Price: </strong>&#8377; 40000.00 Only.</p>
                            <?php
                                if(check_if_added_to_cart(2,$con)){
                             ?>    
                            <a href="cart.php"><button class="btn btn-primary btn-block" disabled>Added to Cart</button></a>                            
                            <?php
                                }
                                else{
                             ?>    
                            <a href="cart-add.php?id=2"><button class="btn btn-primary btn-block">Add to Cart</button></a>                                                        
                            <?php }?>
                        </div>
                        </center>
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img class="img-responsive" src="image/3.jpg" alt="Sony DSLR">
                        <center>
                        <div class="caption">
                            <h3><strong>Sony DSLR</strong></h3>
                            <p><strong>Price: </strong>&#8377; 50000.00 Only.</p>
                            <?php
                                if(check_if_added_to_cart(3,$con)){
                             ?>    
                            <a href="cart.php"><button class="btn btn-primary btn-block" disabled>Added to Cart</button></a>                            
                            <?php
                                }
                                else{
                             ?>    
                            <a href="cart-add.php?id=3"><button class="btn btn-primary btn-block">Add to Cart</button></a>                                                        
                            <?php }?>
                        </div>
                        </center>
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img class="img-responsive" src="image/4.jpg" alt="Olymphus DSLR">
                        <center>
                        <div class="caption">
                            <h3><strong>Olymphus DSLR</strong></h3>
                            <p><strong>Price: </strong>&#8377; 80000.00 Only.</p>
                            <?php
                                if(check_if_added_to_cart(4,$con)){
                             ?>    
                            <a href="cart.php"><button class="btn btn-primary btn-block" disabled>Added to Cart</button></a>                            
                            <?php
                                }
                                else{
                             ?>    
                            <a href="cart-add.php?id=4"><button class="btn btn-primary btn-block">Add to Cart</button></a>                                                        
                            <?php }?>
                        </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
       
        <!-- Watches -->
         <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img class="img-responsive" src="image/9.jpg" alt="Titan Model #301">
                        <center>
                        <div class="caption">
                            <h3><strong>Titan Model #301</strong></h3>
                            <p><strong>Price: </strong>&#8377; 13000.00 Only.</p>
                            <?php
                                if(check_if_added_to_cart(5,$con)){
                             ?>    
                            <a href="cart.php"><button class="btn btn-primary btn-block" disabled>Added to Cart</button></a>                            
                            <?php
                                }
                                else{
                             ?>    
                            <a href="cart-add.php?id=5"><button class="btn btn-primary btn-block">Add to Cart</button></a>                                                        
                            <?php }?>
                        </div>
                        </center>
                    </div>
                </div>
                       
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img class="img-responsive" src="image/10.jpg" alt="Titan Model #201">
                        <center>
                        <div class="caption">
                            <h3><strong>Titan Model #201</strong></h3>
                            <p><strong>Price: </strong>&#8377; 3000.00 Only.</p>
                            <?php
                                if(check_if_added_to_cart(6,$con)){
                             ?>    
                            <a href="cart.php"><button class="btn btn-primary btn-block" disabled>Added to Cart</button></a>                            
                            <?php
                                }
                                else{
                             ?>    
                            <a href="cart-add.php?id=6"><button class="btn btn-primary btn-block">Add to Cart</button></a>                                                        
                            <?php }?>
                        </div>
                        </center>
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img class="img-responsive" src="image/11.jpg" alt="HMT Millan">
                        <center>
                        <div class="caption">
                            <h3><strong>HMT Millan</strong></h3>
                            <p><strong>Price: </strong>&#8377; 8000.00 Only.</p>
                            <?php
                                if(check_if_added_to_cart(7,$con)){
                             ?>    
                            <a href="cart.php"><button class="btn btn-primary btn-block" disabled>Added to Cart</button></a>                            
                            <?php
                                }
                                else{
                             ?>    
                            <a href="cart-add.php?id=7"><button class="btn btn-primary btn-block">Add to Cart</button></a>                                                        
                            <?php }?>
                        </div>
                        </center>
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img class="img-responsive" src="image/12.jpg" alt="Faber Luba #111">
                        <center>
                        <div class="caption">
                            <h3><strong>Faber Luba #111</strong></h3>
                            <p><strong>Price: </strong>&#8377; 18000.00 Only.</p>
                            <?php
                                if(check_if_added_to_cart(8,$con)){
                             ?>    
                            <a href="cart.php"><button class="btn btn-primary btn-block" disabled>Added to Cart</button></a>                            
                            <?php
                                }
                                else{
                             ?>    
                            <a href="cart-add.php?id=8"><button class="btn btn-primary btn-block">Add to Cart</button></a>                                                        
                            <?php }?>
                        </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Shirts -->
        
         <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img class="img-responsive" src="image/8.jpg" alt="H&W">
                        <center>
                        <div class="caption">
                            <h3><strong>H&W</strong></h3>
                            <p><strong>Price: </strong>&#8377; 800.00 Only.</p>
                            <?php
                                if(check_if_added_to_cart(9,$con)){
                             ?>    
                            <a href="cart.php"><button class="btn btn-primary btn-block" disabled>Added to Cart</button></a>                            
                            <?php
                                }
                                else{
                             ?>    
                            <a href="cart-add.php?id=9"><button class="btn btn-primary btn-block">Add to Cart</button></a>                                                        
                            <?php }?>
                        </div>
                        </center>
                    </div>
                </div>
                       
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img class="img-responsive" src="image/6.jpg" alt="Luis Phil">
                        <center>
                        <div class="caption">
                            <h3><strong>Luis Phil</strong></h3>
                            <p><strong>Price: </strong>&#8377; 1000.00 Only.</p>
                            <?php
                                if(check_if_added_to_cart(10,$con)){
                             ?>    
                            <a href="cart.php"><button class="btn btn-primary btn-block" disabled>Added to Cart</button></a>                            
                            <?php
                                }
                                else{
                             ?>    
                            <a href="cart-add.php?id=10"><button class="btn btn-primary btn-block">Add to Cart</button></a>                                                        
                            <?php }?>
                        </div>
                        </center>
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img class="img-responsive" src="image/13.jpg" alt="John Zok">
                        <center>
                        <div class="caption">
                            <h3><strong>John Zok</strong></h3>
                            <p><strong>Price: </strong>&#8377; 1500.00 Only.</p>
                            <?php
                                if(check_if_added_to_cart(11,$con)){
                             ?>    
                            <a href="cart.php"><button class="btn btn-primary btn-block" disabled>Added to Cart</button></a>                            
                            <?php
                                }
                                else{
                             ?>    
                            <a href="cart-add.php?id=11"><button class="btn btn-primary btn-block">Add to Cart</button></a>                                                        
                            <?php }?>
                        </div>
                        </center>
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img class="img-responsive" src="image/14.jpg" alt="Jhalsani">
                        <center>
                        <div class="caption">
                            <h3><strong>Jhalsani</strong></h3>
                            <p><strong>Price: </strong>&#8377; 1300.00 Only.</p>
                            <?php
                                if(check_if_added_to_cart(12,$con)){
                             ?>    
                            <a href="cart.php"><button class="btn btn-primary btn-block" disabled>Added to Cart</button></a>                            
                            <?php
                                }
                                else{
                             ?>    
                            <a href="cart-add.php?id=12"><button class="btn btn-primary btn-block">Add to Cart</button></a>                                                        
                            <?php }?>
                        </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
        <!-- Footer of the Page -->
        
        <?php
            include 'includes/footer.php';
        ?>
         
    </body>
</html>
