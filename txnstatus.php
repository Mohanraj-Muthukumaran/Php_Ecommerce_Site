<?php
        require 'includes/common.php';
        
        if(!isset($_SESSION['email'])){
            header('location: index.php');
            exit;
        }
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");

	// following files need to be included
	require_once("./lib/config_paytm.php");
	require_once("./lib/encdec_paytm.php");

	$ORDER_ID = "";
	$requestParamList = array();
	$responseParamList = array();

	if (isset($_POST["ORDER_ID"]) && $_POST["ORDER_ID"] != "") {

		// In Test Page, we are taking parameters from POST request. In actual implementation these can be collected from session or DB. 
		$ORDER_ID = $_POST["ORDER_ID"];

		// Create an array having all required parameters for status query.
		$requestParamList = array("MID" => PAYTM_MERCHANT_MID , "ORDERID" => $ORDER_ID);  
		
		$StatusCheckSum = getChecksumFromArray($requestParamList,PAYTM_MERCHANT_KEY);
		
		$requestParamList['CHECKSUMHASH'] = $StatusCheckSum;

		// Call the PG's getTxnStatusNew() function for verifying the transaction status.
		$responseParamList = getTxnStatusNew($requestParamList);
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Mohanraj Muthukumaran">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <!--Linking Bootstrap and jquery Using CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="css/index.css" rel="stylesheet" type="text/css">
        <title>Transaction Status - Life's Trend Store</title>
        <meta name="GENERATOR" content="Evrsoft First Page">
</head>
<body>
        <!-- Navbar of Login Page -->
        
         <?php
            include 'includes/header.php';
         ?>
        
         <!-- Content of the page -->
         <div class="container">
            <div id="signup-form"> <!-- Same Design of SignUp Form -->
            <div class="row">
                <div class="col-xs-10 col-sm-8 col-md-6 col-lg-4 col-xs-offset-1 col-sm-offset-2 col-md-offset-3 col-lg-offset-4">  <!--To find offset value use B-Centering Formula : (12-n)/2 where n is the grid defined -->
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>PREVIOUS TRANSACTION STATUS CHECKER</h3>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="">
                            <div class="form-group">
                            <label for="ORDER_ID">ORDER ID:</label>
                            <input class="form-control" id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" value="<?php echo $ORDER_ID ?>">
                            </div>
                            <center>
                             <div class="form-group">
                                 <input class="btn btn-primary" value="Check Status" type="submit"	onclick="">
                             </div>
                            </center>
                        <?php
                            if (isset($responseParamList) && count($responseParamList)>0 )
                                { 
                        ?>
                        <center>
                        <h3><b>Here are the Details!</b></h3>
                        <div class="table-responsive">
                        <table class="table">
			<tbody>
				<?php
					foreach($responseParamList as $paramName => $paramValue) {
				?>
				<tr >
					<td style="border: 1px solid"><label><?php echo $paramName?></label></td>
					<td style="border: 1px solid"><?php echo $paramValue?></td>
				</tr>
				<?php
					}
				?>
			</tbody>
                        </table>
                        </div>
                        </center>
                        <?php
                        }
                        else{
                        ?>
                            <center>
                                <small class="text-warning">Enter your Order ID to check the status!</small>
                            </center>
                        <?php }?>
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