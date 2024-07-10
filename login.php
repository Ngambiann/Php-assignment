<?php

$username = "";
$password = "";
$signup_username = "";
$signup_password = "";
$signup_email = "";

// Connect to the database
$conn = mysqli_connect("localhost", "username", "password", "database_name");



// Login form
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the username and password are correct
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = md5('$password')";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Login successful
        echo "Login successful";
    } else {
        // Login failed
        echo "Login failed";
    }
}



// Check the connection
if(!$conn){
    die("Connection failed: ". mysqli_connect_error());
}





