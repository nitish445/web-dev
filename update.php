<?php
include "connection.php";
        ?>

        <h2>User Update Form</h2>
        <form action="" method="post">
            <fieldset>
                <legend>Personal information:</legend>
                First name:<br>
                <input type="text" name="firstname" value="<?php echo $first_name; ?>"><br>
                <input type="hidden" name="user_id" value="<?php echo $id; ?>">
                Last name:<br>
                <input type="text" name="lastname" value="<?php echo $last_name; ?>"><br>
                Email:<br>
                <input type="email" name="email" value="<?php echo $email; ?>"><br>
                Password:<br>
                <input type="password" name="password" value="<?php echo $password; ?>"><br>
                Gender:<br>
                <input type="radio" name="gender" value="Male" <?php if ($gender == 'Male') {
                    echo "checked";
                } ?>>Male
                <input type="radio" name="gender" value="Female" <?php if ($gender == 'Female') {
                    echo "checked";
                } ?>>Female<br><br>
                <input type="submit" value="Update" name="update">
            </fieldset>
        </form>
        </body>
        </html>
        <?php
?>
