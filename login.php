<?php
$servername="localhost";
$username = "";
$password = "";
$signup_password = "";
$database_name ="signuplogin";



$conn = mysqli_connect($servername,$username,$password,$signup_password,$database_name);
if (!$conn){
    die("connection failed:" . mysqli_connect_error());
}
echo "Welcome Back!";



if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo "Welcome back!";
}
