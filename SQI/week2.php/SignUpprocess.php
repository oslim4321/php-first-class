<?php

   require('conDb.php');
//    $errors {'name'=> '', 'email' => '', 'password'=> '' }
   session_start();
   $name = $_POST['name'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $hashPassword = password_hash($password, PASSWORD_DEFAULT);
   if (empty($name) && empty($email) && empty($password)) {
    echo 'all fileds are required';
    return ;
   }

   $sqi = "INSERT INTO users (name, email, password) values('$name', '$email',  '$hashPassword')";
   $found = mysqli_query($conn, "SELECT email FROM users  where email = '$email' ");

    if (mysqli_num_rows($found) >= 1) {
        $_SESSION['error'] = 'email aleredy exits';
       header('location:index.php');
       return;
    }
    $save = mysqli_query($conn, $sqi);
    if ($save) {
        $_SESSION['success'] = 'Account successfully Registered';

      header('location:index.php');
    }else{
       
        header('location:index.php');
    }
?>