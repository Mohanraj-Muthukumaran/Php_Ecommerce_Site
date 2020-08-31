<?php
    require 'includes/common.php';
    
    if(!isset($_SESSION['email'])){
        header('location: index.php');
        exit;
    }
    $user_id = $_SESSION['id'];
    $user_email = $_SESSION['email'];
   header("Pragma: no-cache");
    header("Cache-Control: no-cache");
    header("Expires: 0");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Payment - Life's Trend Store</title>
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
                        <h3>PAYMENT DETAILS</h3>
                    </div>
                    <form method="POST" action="pgredirect.php"> 
                    <div class="panel-body table-responsive">
                            <table class="table">
                                <tr>   
                                    <td><label for="ORDER_ID">Order No</label></td>
                                    <td><input id="ORDER_ID"  name="ORDER_ID" value="<?php echo "LT".rand(10000,500000) ?>" type="text" readonly/></td>
                                </tr>
                                <tr>
                                    <td><label for="CUST_ID"> Customer No</label></td>
                                    <td><input type="text" id="CUST_ID" name="CUST_ID" value="<?php echo $user_id;?>" readonly/></td>
                                </tr>
                                <tr>
                                    <td><label for="INDUSTRY_TYPE_ID">Industry Type</label></td>
                                    <td><input id="INDUSTRY_TYPE_ID" name="INDUSTRY_TYPE_ID" type="text" value="Education" readonly/></td>
                                </tr>
                                <tr>
                                    <td><label for="CHANNEL_ID">Channel Type</label></td>
                                    <td><input id="CHANNEL_ID" name="CHANNEL_ID" type="text" value="WEB" readonly/></td>
                                </tr>
                                <tr>
                                    <td><label for="TXN_AMOUNT">Transaction Amount</label></td>
                                    <td><input type="text" id="TXN_AMOUNT" name="TXN_AMOUNT" value="10" readonly/></td>
                                </tr>
                            </table>
                     </div>
                    <center>
                    <div class="panel-footer">
                        <div class="form-group">
                            <button class="btn btn-primary" id="submit" type="submit">Proceed With PayTM</button>
                        </div><br>
                        Payment Gateway is secured with <a href="https://paytm.com/" target="_blank"> PayTM <i class="glyphicon glyphicon-check"></i></a>
                    </div>
                    </center>
                    </form>
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