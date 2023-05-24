<?php
    include "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Signup Form</title>
</head>
<body>
    <h2>Signup Form</h2>
    <form action="create.php" method="POST">
        
            <legend>Personal information:</legend>
            First name:<br>
            <input type="text" name="firstname"><br>
            Last name:<br>
            <input type="text" name="lastname"><br>
            Email:<br>
            <input type="email" name="email"><br>
            Password:<br>
            <input type="password" name="password"><br>
            Gender:<br>
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female<br><br>
            <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
<?php


$firstname= $_POST["firstname"];
$lastname= $_POST["lastname"];
$email= $_POST["email"];
$password= $_POST["password"];
$gender= $_POST["gender"];

$sql="INSERT INTO `task` (`firstname`, `lastname`, `email`, `password`, `gender`) VALUES ('$firstname', '$lastname', '$email', '$password', '$gender');";
mysqli_query($conn, $sql);
?>