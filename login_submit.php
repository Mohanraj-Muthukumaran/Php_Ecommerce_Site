<?php
    require 'includes/common.php';
    
    $email = mysqli_real_escape_string($con, $_POST['Email']); 
    $password = md5(mysqli_real_escape_string($con, $_POST['Password'])); 
    $select_query = "SELECT id,name,email,password FROM `users` WHERE `email`='$email';";
    $select_query_result = mysqli_query($con, $select_query);
    if (mysqli_num_rows($select_query_result) == 0)
        {
            header('location: login.php?login_error=No users found! Enter a valid email id!');
            exit;
        }
    else{
        $result = mysqli_fetch_array($select_query_result);
        if($result['password'] === $password){
            $_SESSION['email'] = $result['email'];
            $_SESSION['id'] = $result['id'];
            header('location: products.php');
            exit;
        }
        else{
            header('location: login.php?login_error=Password is incorrect! Try again!');
            exit;
        }
    }
?>