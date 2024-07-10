<?
if (isset($_POST['signup'])) {
    $signup_username = $_POST['signup_username'];
    $signup_password = $_POST['signup_password'];
    $signup_email = $_POST['signup_email'];

    // Insert the data into the database
    $sql = "INSERT INTO users (username, password, email) VALUES ('$signup_username', md5('$signup_password'), '$signup_email')";
    mysqli_query($conn, $sql);

    // Sign up successful
    echo "Sign up successful";
}

?>
