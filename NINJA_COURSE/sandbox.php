<?php
    // echo $_SERVER['SERVER_NAME'] . '</br>';
    // echo $_SERVER['REQUEST_METHOD'] . '</br>';
    // echo $_SERVER['SCRIPT_FILENAME'] . '</br>';
    // echo $_SERVER['PHP_SELF'] . '</br>';
    
    if (isset($_POST['submit'])) {
        setcookie('gender', $_POST['gender'], time() + 86400);
        session_start();
        $_SESSION['name'] = $_POST['name'];
        header('location:Templates/index.php');
    };
    

    
?>


<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="text" name='name'>

    <select name="gender" id="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>

    <input type="submit" name='submit'>

    
</form>