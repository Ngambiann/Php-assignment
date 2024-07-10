<?
if (isset($_POST['signup'])) {
    $signup_username = $_POST['signup_username'];
    $signup_password = $_POST['signup_password'];
    $signup_email = $_POST['signup_email'];
    echo "Hello!" . $_POST['signup'];
}
?>