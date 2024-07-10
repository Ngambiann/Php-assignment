<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup/Login page</title>
</head>
<body>
    <h3>Login</h3><hr>
    <form  action="login.php" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" id="username" placeholder="username/email"><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" placeholder="password"><br><br>

        <button type="submit">Login</button><br><br><br>
    </form>
<h3>Signup </h3><hr>
    <form action="signup.php"  method="POST">
    <label for="signup_username">Username:</label><br>
    <input type="text" id="signup_username" placeholder="username"><br><br>

        <label for="signup_password">Password:</label><br>
        <input type="password" id="signup_password" placeholder="password"><br><br>
        <button type="submit">signup</button>
    </form>
    <hr>
</body>
</html>


