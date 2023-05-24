<?php
$servername="localhost";
$username="root";
$password="";
$database= 'TASK';
$conn= mysqli_connect($servername, $username, $password, $database);
if(!$conn){
    die("sorry onncetion failed: ".mysqli_connect_error());
}
else{
    echo "connection successfull";
}


?>