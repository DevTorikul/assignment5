<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

$username = $_SESSION['username'];

echo "<h1>Welcome, $username!</h1>";
echo "<p><a href='logout.php'>Logout</a></p>";
?>