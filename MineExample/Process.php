<?php
session_start();

$email = $_POST['email'];
$name = $_POST['name'];

// echo $email;
// echo $name;

if (((isset($email) && !empty($email)) && (isset($name) && !empty($name)))) {
   echo 'nice';
}else{
   echo 'Failed!!';
   $_SESSION['email'] = 'email is required';
   $_SESSION['name'] = 'name is required';
   header('location:index.php');
};

// if ( (isset($email) && !empty($email)) ) {
//    $_SESSION['email'] = 'Email is required';
//    header('location:index.php');
// }elseif( (isset($name) && !empty($name)) ){
//    $_SESSION['name']= 'Name is required';
//    header('location:index.php');
// }

?>