<?php
    require 'includes/common.php';
    
    $name = mysqli_real_escape_string($con, $_POST['Name']);
    $email = mysqli_real_escape_string($con, $_POST['Email']);
    $email_pattern = "/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/";
    if(!preg_match($email_pattern, $email)){
        header('location:signup.php?signup_error=Please enter a valid email id!');
        exit;
    }
    $password_temp = mysqli_real_escape_string($con, $_POST['Password']); 
    $password = md5($password_temp);
    $password_pattern = "/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$/";
    if(!preg_match($password_pattern, $password_temp) || strlen($password_temp) < 6 ){
        header('location:signup.php?signup_error=Sorry! Password must meet the requirements!');
        exit;
    }
    $contact = mysqli_real_escape_string($con, $_POST['Contact']);
    $city = mysqli_real_escape_string($con, $_POST['City']);
    $address = mysqli_real_escape_string($con, $_POST['Address']);
    
    $select_query = "SELECT email FROM `users` WHERE `email`= '$email';";
    $select_query_result = mysqli_query($con,$select_query);
    if(mysqli_num_rows($select_query_result) != 0){
        echo 'User Already Exists! Try Log In!';
        header('location:login.php?login_error=User already exists! try log in!');
        exit;
    }
    else{
        $insert_query = "INSERT INTO `users` (name,email,password,contact,city,address) VALUES ('$name','$email','$password','$contact','$city','$address');";
        $insert_query_result = mysqli_query($con, $insert_query) or die(mysqli_error($insert_query));
        $_SESSION['id'] = mysqli_insert_id($con);
        $_SESSION['email'] = $email;
        header('location:products.php');
        exit;
    }
?>