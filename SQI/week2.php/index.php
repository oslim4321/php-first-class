<?php
    session_start()
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="SignUpprocess.php" method="post">
        <div style="color: red;">
           <?php require 'PhpMessageHandle.php' ?>
        </div>
        <h1>Signup</h1>
        <label for="name">Name</label>
        <input type="text" name='name' required>

        
        <label for="email">Email</label>
        <input type="text" name='email' required>

        
        <label for="password">Password</label>
        <input type="text" name='password' required>

        <button type='submit'>Submit</button>    
    </form>
</body>
</html>