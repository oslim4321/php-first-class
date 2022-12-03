<?php

    // $_SERVER = 'localhost';
    // $user = 'root';
    // $password = '';
    // $db= 'tizzyclass';
    // $conn=mysqli_connect($_SERVER, $user, $password, $db);
    // if ($conn) {
    //   echo 'connected to database';  
    // }else{
    //     echo 'fail to connect';
    // }
    $conn = mysqli_connect('localhost', 'oslim', 'oslim123', 'tizzyclass');
    // $conn ? echo 'connected successfully': echo 'failed to connect';
    if (!$conn) {
       echo 'failed to connect';
       return;
    }
    // echo 'you are connected'

?>