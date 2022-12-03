<?php
    session_start();
  
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="loginProcess.php" method="post">
        <div style="color: red;">
           <?php require 'PhpMessageHandle.php' ?>
        </div> 
        <h1>Login</h1>
        <label for="email">Email</label>
        <input type="text" name='email' >

        
        <label for="password">Password</label>
        <input type="text" name='password' >

        <button type='submit'>Submit</button>    
    </form>
</body>
</html>