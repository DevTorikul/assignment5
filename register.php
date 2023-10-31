<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    
    // Save user data to users.txt (Append mode)
    $userData = "$username,$email,$password" . PHP_EOL;
    file_put_contents('data/users.txt', $userData, FILE_APPEND | LOCK_EX);
    
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Registration</title>
</head>

<body>
    <h1>Registration</h1>
    <form action="register.php" method="post">
        Username: <input type="text" name="username"><br>
        Email: <input type="email" name="email"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" value="Register">
    </form>
</body>

</html>