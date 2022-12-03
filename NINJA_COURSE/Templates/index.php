<?php

    include ('config/db_connect.php');

    /* write query for all pizza */
    $sqi = 'SELECT title, ingredients,id, email FROM pizzas ORDER BY created_at';
    /* make query & get results */
    $result = mysqli_query($conn, $sqi);
    /* fetch the resulting rows as an array  */
    $pizza = mysqli_fetch_all($result, MYSQLI_ASSOC);

    /* free from memory */
    mysqli_free_result($result);

    /* close connection */
    mysqli_close($conn);   

?>


<html lang="en">

    <?php require 'Navbar.php'?>
    <h1 style="text-align: center;">Pizza!</h1>

   <div class="productWrap">
   <?php
        foreach ($pizza as $value) : ?>
        <div class="card">
            <img src="../../images/pizzaa.jpg" alt="Denim Jeans" style="width:100%">
            <h1><?php echo htmlspecialchars($value['title']) ?></h1>
            <!-- <p><?php echo htmlspecialchars($value['email']) ?></p> -->
            <p class="price">$19.99</p>
            <ul>
                <?php foreach (explode(',', $value['ingredients']) as $ingre) : ?>
                    <li><?php echo htmlspecialchars($ingre) ?></li>
                <?php endforeach ?>
            </ul>
            <!-- <p><?php echo htmlspecialchars($value['ingredients']) ?></p> -->
            <p><a href="details.php?id=<?php echo $value['id']?>"><button>More Info</button></a></p>
        </div>

    <?php endforeach; ?>
   </div>
    

   

    <?php require 'footer.php'?>

</html>