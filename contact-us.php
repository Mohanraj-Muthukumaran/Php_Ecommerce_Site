<?php
    require 'includes/common.php';
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
        <br><br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-9 col-lg-9">
                    <h3 class="text-center"><b>Live Support</b></h3>
                    <p class="text-center text-secondary">24 hours | 7 days a week | 365 days a year Live Technical Support</p>
                    <div class="text-secondary"><br>
                        <p><strong>Life's Trend Store</strong> is an <b>E-Commerce Platform</b> built in for Educational purpose.
                         E-Commerce, also known as e-Business, or electronic business, 
                         is simply the sale and purchase of services and goods over an electronic medium, like the Internet.
                          It also involves electronically transferring data and funds between two or more parties.
                          Simply put, it is online shopping as we commonly know it.E-Commerce started way back in the 1960s when organizations began to use Electronic Data Interchange (EDI) to transfer documents of their business back and forth.
                        </p>
                    </div>
                        
                </div>
                <div class="col-xs-12 col-md-3 col-lg-3">
                    <center>
                    <img class="img-responsive" src="image/24-7support.png" alt="support">
                    </center>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-8 col-lg-8">
                    <h3 class="text-center"><b>Get in Touch with us!</b></h3>
                    <form class="form" method="POST" action="index.php">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input class="form-control" id="name" name="Name" type="text" placeholder="Name *" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" id="email" name="Email" type="email" placeholder="Email *" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="Message" placeholder="Message *" rows="5" required></textarea>
                        </div>
                        <center>
                        <div class="form-group">
                             <button class="btn btn-primary" id="submit" type="submit">Submit</button>
                        </div>
                        </center>
                    </form>
                </div>
                
                <div class="col-xs-12 col-md-4 col-lg-4">
                <h3 class="text-center"><b>Developer's Info!</b></h3>
                <p class="text-center text-secondary"><b>Mohanraj Muthukumaran</b> <br> Web Developer | Cross Platform App Developer</p>
                    <div class="text-secondary"><br>
                        <center>
                        <p>
                            Email   : mohanrajmuthukumaran@gmail.com<br>
                            Phone   : +91 9894634372
                            <br><br>
                            Villupuram , Tamil Nadu - 605602
                            <br><br>
                            Follow On:<br>
                            Facebook: <a href="https://www.facebook.com/www.mohanrajmuthukumaran" target="_blank">Mohan Raj</a> |
                            LinkedIn: <a href="https://www.linkedin.com/in/mohanraj-muthukumaran-5b46a4188/" target="_blank">Mohanraj Muthukumaran</a> |
                            GitHub  : <a href="https://github.com/Mohanraj-tech" target="_blank">Mohanraj-Tech</a><br>.
                          </p>
                        </center>
                    </div>
                        
                </div>
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
