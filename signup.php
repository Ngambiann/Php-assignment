<?
if (isset($_POST['signup'])) {
    $signup_username = $_POST['signup_username'];
    $signup_password = $_POST['signup_password'];
    

 
    $sql = "INSERT INTO users (username, password) VALUES ('$signup_username',('$signup_password')";
    mysqli_query($conn, $sql);
       echo "Hello";
}


