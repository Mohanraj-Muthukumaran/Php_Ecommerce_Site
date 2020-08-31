<nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php" target="_self">Life's Trend Store</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                            if(isset($_SESSION['id'])){
                        ?>
                        <li><a href="products.php" target="_self"><i class="glyphicon glyphicon-th"></i> Products</a></li>
                        <li><a href="setting.php" target="_self"><i class="glyphicon glyphicon-cog"></i> Settings</a></li>
                        <li><a href="cart.php" target="_self"><i class="glyphicon glyphicon-shopping-cart"></i> Cart</a></li>
                        <li><a href="about-us.php" target="_self"><i class="glyphicon glyphicon-book"></i> About Us</a></li>
                        <li><a href="contact-us.php" target="_self"><i class="glyphicon glyphicon-heart"></i> Contact Us</a></li>       
                        <li><a href="logout.php" target="_self"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
                        <?php
                            }
                            else{
                        ?>
                        <li><a href="signup.php" target="_self"><i class="glyphicon glyphicon-user"></i> Sign Up</a></li>
                        <li><a href="login.php" target="_self"><i class="glyphicon glyphicon-log-in"></i> Log In</a></li>
                         <li><a href="about-us.php" target="_self"><i class="glyphicon glyphicon-book"></i> About Us</a></li>
                        <li><a href="contact-us.php" target="_self"><i class="glyphicon glyphicon-heart"></i> Contact Us</a></li>       
                        <?php
                            }
                        ?>
                       
                    </ul>
                </div>
            </div>
</nav>
