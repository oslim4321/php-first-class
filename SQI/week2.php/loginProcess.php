<?php

    require 'conDb.php';
    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];
   
    $sql = "SELECT * FROM users where email = '$email' ";

    $user = mysqli_query($conn, $sql);
    
    $user = mysqli_fetch_assoc($user);
    if (!isset($user)) {
        $_SESSION['error'] = 'cant find this email';
        header("location:Login.php");
        return ;
    }
    if (password_verify($password, $user['password'])) {
      $_SESSION['success'] = 'you are in now';
      $_SESSION['details'] =  $user;
      header("location:dashboeard.php");
      return ;
    }else{
        $_SESSION['error']='error your password id inscoorrect';
        header("location:Login.php");
      
    }

?>