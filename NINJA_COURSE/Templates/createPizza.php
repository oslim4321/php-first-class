

<?php
    include ('config/db_connect.php');

    $email = $title = $ingredient = $error = '';
    $errors = ['email'=> '','title'=>'','ingredient'=> ''];
   
    if (isset($_POST['submit'])) {
        /* title filed */
        if (empty($_POST['title'])) {
            $errors['title'] = 'Title field is required <br/>';
        }else{
            $title = $_POST['title'];
            if (!preg_match('/^[a-zA-Z\s]+$/', $title)) {
                $errors['title'] ='Title must contain a letter and spaces <br/>';
            }
        };

         /* email filed */
        if (empty($_POST['email'])) {
            $errors['email'] = 'An Email field is required';
        }else{
            $email = $_POST['email'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
               $errors['email'] = 'Email must be valid email address <br/>'; 
            }
        };

         /* ingredient filed */
        if (empty($_POST['ingredient'])) {
            $errors['ingredient'] = 'At least one Ingredient is required <br/>';
        }else{
            $ingredient = $_POST['ingredient'];
            if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredient)) {
                $errors['ingredient'] = 'Ingredient must contain a letter comma and spaces <br/>';
            }

        };
        if (array_filter($errors)) {
            $error = 'Cant save item, there are errors in the form';
        }else{
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $title = mysqli_real_escape_string($conn, $_POST['title']);
            $ingredients = mysqli_real_escape_string($conn, $_POST['ingredient']);
            
            /* create sqi*/
            $sqi = "INSERT INTO pizzas(email,title,ingredients) VALUES('$email', '$title', '$ingredients')";
            if (mysqli_query($conn, $sqi)) {
                header('location:index.php');
            }else{
                $error = 'query error' . mysqli_error($conn);
            };
            
        };
    };

?>

    
<html lang="en">
        <?php require 'Navbar.php'?>

    <form id="form-main" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <div id="form-div">
            <form class="form" id="form1">
            
            <p class="title">
                <input name="title" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Title" id="title" value='<?php echo htmlspecialchars($title) ?>'/>
                <p style="color: red;"><?php  echo $errors['title']; ?></p>
            </p>
            
            <p class="email">
                <input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" value='<?php echo htmlspecialchars($email) ?>'/>
                <p style="color: red;"><?php  echo $errors['email']; ?></p>
            </p>
            
            <p class="text">
                <textarea name="ingredient" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Ingredients"><?php echo htmlspecialchars($ingredient) ?></textarea>
                <p style="color: red;"><?php  echo $errors['ingredient']; ?></p>
            </p>
            
            
            <div class="submit">
                <input type="submit" name='submit' value="SEND" id="button-blue"/>
                <div class="ease"></div>
            </div>
            <p style="color: red;"s><?php echo $error ?></p>
            </form>
        </div>
</form>

        <?php require 'footer.php'?>
</html>