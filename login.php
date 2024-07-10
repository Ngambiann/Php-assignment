<?php

$username = "";
$password = "";
$signup_email = "";
$signup_password = "";


// Connect to the database
$conn = mysqli_connect("localhost", "username", "password", "database_name");




if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
}
?>