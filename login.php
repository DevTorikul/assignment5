<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $userData = file('data/users.txt', FILE_IGNORE_NEW_LINES);
    foreach ($userData as $line) {
        list($username, $storedEmail, $storedPassword) = explode(',', $line);
        if ($email === $storedEmail && password_verify($password, $storedPassword)) {
            $_SESSION['username'] = $username;
            header('Location: dashboard.php');
            exit();
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>
    <form action="login.php" method="post">
        Email: <input type="email" name="email"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" value="Login">
    </form>
</body>

</html>