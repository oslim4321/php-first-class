
<?php
    include ('config/db_connect.php');
    
    if (isset($_POST['delete'])) {
        // print_r($_POST);
        $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);
        $sqi = "DELETE FROM pizzas WHERE id = $id_to_delete";

        if (mysqli_query($conn, $sqi)) {
            header('location:index.php');
        }else{
            echo 'Query Error' . mysqli_error($conn);
        }
    };


   if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    /* make aqi select pizzas we want */
    $sqi = "SELECT * FROM pizzas WHERE id = $id";
    /* get query  results */
    $result = mysqli_query($conn,$sqi);
    /* fetch pizza */
    $pizza = mysqli_fetch_assoc($result);

    /* free from memory */
    mysqli_free_result($result);
    /* close connection */
    mysqli_close($conn);

    // print_r($pizza);
   }

?>

<html lang="en">
    <?php  include ('Navbar.php'); ?>
    
    <div class="detailsPage">
        <h2>Detailss</h2>

    <?php if($pizza){ ?>
        <h3><?php echo $pizza['title'] ?></h3>
        <h3><?php echo $pizza['email'] ?></h3>
        <p>created at <?php echo date($pizza['created_at']) ?></p>
        <h3>Ingredients</h3>
        <p><?php echo $pizza['ingredients'] ?></p>
        <!-- <h3><?php echo $pizza['title'] ?></h3> -->
    <?php }  else { ?>
        <h1 style="color: red;">Sorry!!! Cant get the item you lookin for</h1>
        <p>You may have input a wrong data</p>
    <?php } ?>

        <form action="details.php" method="post">
            <input type="hidden" name='id_to_delete' value='<?php echo $pizza['id'] ?>'>
            <input type="submit" name='delete' value='Delete'>
        </form>


    </div>

    <?php require 'footer.php'?>
</html>