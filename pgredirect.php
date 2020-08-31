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
// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$checkSum = "";
$paramList = array();

$ORDER_ID = $_POST["ORDER_ID"];
$CUST_ID = $_POST["CUST_ID"];
$INDUSTRY_TYPE_ID = $_POST["INDUSTRY_TYPE_ID"];
$CHANNEL_ID = $_POST["CHANNEL_ID"];
$TXN_AMOUNT = $_POST["TXN_AMOUNT"];

// Create an array having all required parameters for creating checksum.
$paramList["MID"] = PAYTM_MERCHANT_MID;
$paramList["ORDER_ID"] = $ORDER_ID;
$paramList["CUST_ID"] = $CUST_ID;
$paramList["INDUSTRY_TYPE_ID"] = $INDUSTRY_TYPE_ID;
$paramList["CHANNEL_ID"] = $CHANNEL_ID;
$paramList["TXN_AMOUNT"] = $TXN_AMOUNT;
$paramList["WEBSITE"] = PAYTM_MERCHANT_WEBSITE;

    //Don't forget to change this!
$paramList["CALLBACK_URL"] = "http://localhost/lifestylestore.com/pgresponse.php?user_id=$user_id";
/*
$paramList["CALLBACK_URL"] = "http://localhost/PaytmKit/pgResponse.php";
$paramList["MSISDN"] = $MSISDN; //Mobile number of customer
$paramList["EMAIL"] = $EMAIL; //Email ID of customer
$paramList["VERIFIED_BY"] = "EMAIL"; //
$paramList["IS_USER_VERIFIED"] = "YES"; //

*/

//Here checksum string will return by getChecksumFromArray() function.
$checkSum = getChecksumFromArray($paramList,PAYTM_MERCHANT_KEY);

?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="css/index.css" rel="stylesheet" type="text/css">
    <title>Checkout - Life's Trend Store</title>
</head>
<body>
    <!-- Navbar of the Page -->
    <?php
            include 'includes/header.php';
    ?>
   
    
    
    <center>
            <div class="container success" id="signup-form">
            <div class="row">
                    <div class="border bg-success">
                    <hr>
                    <h3 class="text-warning">Please do not refresh this page...</h3>
                    <hr>
                    </div>
            </div>
        </div>  
    </center>
    <!-- Footer of the Page -->
        <?php 
            include 'includes/footer.php';
        ?>
    <!--Functionality Form-->
	<form method="post" action="<?php echo PAYTM_TXN_URL ?>" name="f1">
	    <table border="1">
		<tbody>
                    <?php
			foreach($paramList as $name => $value) {
				echo '<input type="hidden" name="' . $name .'" value="' . $value . '">';
			}
		    ?>
                    <input type="hidden" name="CHECKSUMHASH" value="<?php echo $checkSum ?>">
		</tbody>
	    </table>
            <script type="text/javascript">
			document.f1.submit();
	    </script>
	</form>

       
</body>
</html>