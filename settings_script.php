<?php
    require 'includes/common.php';
    
    if(!isset($_SESSION['email'])){
        header('location: index.php');
        exit;
    }
    
    $user_id=$_SESSION['id'];
    
    $old_password = md5(mysqli_real_escape_string($con, $_POST['Old_Password']));
    $new_password = mysqli_real_escape_string($con, $_POST['New_Password']);
    $confirm_password = mysqli_real_escape_string($con, $_POST['Confirm_Password']);
    
    $password_pattern = "/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$/";
    
    $select_query = "SELECT password FROM users WHERE id=$user_id";
    $select_query_result = mysqli_query($con, $select_query);
    $result = mysqli_fetch_array($select_query_result);
    
    if($old_password != $result['password']){
        header('location:setting.php?update_error=Authentication failed!');
        exit;
    }
    else{
        if(!preg_match($password_pattern,$new_password) || strlen($new_password)<6){
            header('location:setting.php?update_error=Password must meet the requirements!');
            exit;
        }
        else{
            if($new_password !== $confirm_password){
                header('location:setting.php?update_error=Password confirmation failed!');
                exit;
            }
            else{
                $new_password = md5($new_password);
                if($new_password === $result['password']){
                    header('location:setting.php?update_error=Old and New passwords are same!');
                    exit;
                }
                else{
                    $update_query = "UPDATE users SET password='$new_password' WHERE id=$user_id";
                    $update_query_result = mysqli_query($con, $update_query) or die($update_query);
                    header('location:setting.php?update_error=Password updated!');
                    exit;
                }
            }
        }
    }
?>