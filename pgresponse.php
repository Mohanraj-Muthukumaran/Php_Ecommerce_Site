<?php
require 'includes/common.php';

$user_id = $_GET['user_id'];
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


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
    <link href="css/index.css" rel="stylesheet" type="text/css">
    <title>Transaction Summary - Life's Trend Store</title>
    <style>
        #correction{
            top: -15%;
        }
    </style>
</head>
<body>
     <!-- Navbar of the Page -->
    <?php
            include 'includes/header.php';
    ?>
<?php   
if($isValidChecksum == "TRUE") { 
?>  
    <div class="text-center">
        <?php if ($_POST["STATUS"] == "TXN_SUCCESS") { ?> 
        <h3 class="text-success">Your order is confirmed.<br><br> Thank you! for shopping with us. <a href="products.php" target="_self"> Click here </a> to purchase more products.</h3>
        <?php
        } 
        else {?>
         <h3 class="text-success">Try Again!<a href="cart.php" target="_self"> Click here </a> to go to Cart.</h3>
         <?php }?>
        <hr>
        <small class="text-warning">Note: Do not reload this page! and note down the Order ID for future reference.</small>
        <hr>            
    </div>
    <center>
        <div class="container success" id="signup-form correction">
            <div class="row">
                    <?php if ($_POST["STATUS"] == "TXN_SUCCESS") { 
                        $update_query = "UPDATE user_items SET status = 'Confirmed' WHERE user_id = $user_id AND status='Added to cart';";
                        $update_query_result = mysqli_query($con, $update_query) or die($update_query);    
                    ?>
                    <div class="border bg-success"> 
                        <hr>
                        <b class="text-success"><?php echo "Transaction Success! Here are the details!" . "<br/>";?></b>
                        <hr>
                        <!--
                        //Process your transaction here as success transaction.
                        //Verify amount & order id received from Payment gateway with your application's order id and amount.
                        -->
                    <?php } 
                    else{?>
                    <div class="border bg-danger">
                        <hr>
                        <b class="text-danger"><?php echo "Transaction Failed! Here are the details!" . "<br/>";?></b>
                        <hr>
                       
                    <?php } ?>
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <td>MERCHANT</td>
                                    <td>LIFE'S TREND STORE</td>
                                </tr>
                                <?php
                                if (isset($_POST) && count($_POST)>0 )
                                    {foreach($_POST as $paramName => $paramValue) {
                                        if($paramName!=='CHECKSUMHASH'){	
                                ?>           
                                <tr>
                                    <td><?php echo $paramName; ?></td>
                                    <td><?php echo $paramValue;?></td>
                                </tr>                  
                                <?php       
                                        }
                                    }
                                }
                                ?>
                            </table>
                        </div>
                        <br>
                        <?php if ($_POST["STATUS"] == "TXN_SUCCESS") { ?>
                        <div class="text-center">
                            <button class="btn btn-success" id="print" >Invoice Copy</button>
                            <br><br>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
       
    </center>
    <br><br><br>
<?php 
}
else{
?>    
    <center>
            <div class="container success" id="signup-form">
            <div class="row">
                    <div class="border bg-success">
                    <hr>
                    <h3 class="text-warning"><?php echo "Transaction seems suspicious! Try Again!";?></h3>
                    <hr>
                    </div>
            </div>
        </div>  
    </center>
<?php
}
?>
 <!-- Footer of the Page -->
        <?php 
            include 'includes/footer.php';
        ?>
<script src="js/printThis.js"></script>
    <script>
      $('#print').click(function(){
        $('.container').printThis({
          debug: false,               // show the iframe for debugging
          importCSS: true,            // import parent page css
          importStyle: false,         // import style tags
          printContainer: true,       // print outer container/$.selector
          loadCSS: "C:/Users/mohan/Desktop/VMJBillingSoftware/invoice.css",// path to additional css file - use an array [] for multiple
          pageTitle: "Estimate Copy",              // add title to print page
          removeInline: false,        // remove inline styles from print elements
          removeInlineSelector: "*",  // custom selectors to filter inline styles. removeInline must be true
          printDelay: 333,            // variable print delay
          header: "",               // prefix to html
          footer: "",               // postfix to html
          base: false,                // preserve the BASE tag or accept a string for the URL
          formValues: true,           // preserve input/form values
          canvas: false,              // copy canvas content
          doctypeString: '...',       // enter a different doctype for older markup
          removeScripts: false,       // remove script tags from print content
          copyTagClasses: false,      // copy classes from the html & body tag
          beforePrintEvent: null,     // function for printEvent in iframe
          beforePrint: null,          // function called before iframe is filled
          afterPrint: null            // function called before iframe is removed
        });
      })
    </script>   
</body>
</html>