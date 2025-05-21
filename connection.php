<?php
$server = "localhost";
$user = "root";
$pass = "Demohaimera12@";
$db = "simpleBlog";
$connection = mysqli_connect($server, $user, $pass, $db);
if(!$connection){
    echo "sorry connection is not set from admin";
}
?>