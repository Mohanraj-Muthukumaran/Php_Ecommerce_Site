<?php
    require 'includes/common.php';
    
    if(!isset($_SESSION['email'])){
        header('location: index.php');
        exit;
    }
    
    $user_id = $_SESSION['id'];
    $select_query = "SELECT p.id,p.name,p.price FROM user_items u INNER JOIN items p WHERE u.`user_id` = $user_id AND u.`item_id` = p.`id` AND u.`status` = 'Added to cart'";
    $select_query_result = mysqli_query($con, $select_query) or die($select_query_result);
    
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Cart - Life's Trend Store</title>
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
        
        <!-- Cart - Content of the page! -->
        <div class="container" id="signup-form"> <!-- same style of the Signup Form -->
            <div class="row">
            <div class="col-xs-10 col-sm-8 col-md-6 col-lg-4 col-xs-offset-1 col-sm-offset-2 col-md-offset-3 col-lg-offset-4"> 
            <div class="panel panel-primary">
            <div class="panel-heading">
                <h3>Shopping Cart</h3>
            </div>
            <div class="panel-body table-responsive">  
            <table class="table">
                <tbody>
                    <?php 
                        $sum = 0;
                        if(mysqli_num_rows($select_query_result) == 0){
                    ?>
                    <tr>
                        <td><div class="text-center text-success">Add Items to Cart to Purchase!</div></td>
                    </tr>
                    <?php
                        }
                        else{
                    ?>
                     <tr>
                        <th>Item Number</th>
                        <th>Item Name</th>
                        <th>Price</th>
                        <th></th>
                    </tr>
                    <?php
                            $i = 0;
                            $sum = 0;
                            while ($row = mysqli_fetch_array($select_query_result)){
                                $sum =$sum + $row['price'];
                               
                    ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['price']; ?>.00</td>
                        <td><a href="cart-remove.php?id=<?php echo $row['id']?>"><i class="glyphicon glyphicon-trash"></i></a></td>
                    </tr>
                    <?php
                            }
                    ?>
                    <tr>
                        <td></td>
                        <td><strong>Total: </strong></td>
                        <td>&#8377; <?php echo $sum; ?>.00 only.</td>
                        <td></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>    
            </table>
            </div>
            <?php if(mysqli_num_rows($select_query_result) != 0) {?>    
            <center>    
            <div class="panel-footer">
                <a class="btn btn-primary" href="paytmpayment.php?id=<?php echo $user_id;?>" target="_self"> Donate Me &#8377; 10.00 Only<br>(Via PayTM) </a><hr>
                <a class="btn btn-success" href="txnstatus.php?id=<?php echo $user_id;?>" target="_self"> Check Status of<br>Previous Transactions </a>
            </div>
            </center>
            <?php }
                 else{
            ?>    
             <center>    
            <div class="panel-footer">
                <a class="btn btn-primary" href="paytmpayment.php?id=<?php echo $user_id;?>" target="_self"> Donate Me &#8377; 10.00 Only<br>(Via PayTM) </a><hr>
                <a class="btn btn-success" href="txnstatus.php?id=<?php echo $user_id;?>" target="_self"> Check Status of<br>Previous Transactions </a>
            </center>    
            <?php } ?>    
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
