<?php
    require 'includes/common.php';
    
    if(!isset($_SESSION['email'])){
        header('location: index.php');
        exit;
    }
    if(isset($_SESSION['email'])){
        session_unset();
        session_destroy();
        header('location: index.php');
        exit;
    }
?>

