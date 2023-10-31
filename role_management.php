<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

$username = $_SESSION['username'];

// Check if the user is an admin (use your own logic, e.g., reading from roles.txt)
$isAdmin = false;

if (!$isAdmin) {
    header('Location: dashboard.php');
    exit();
}

echo "<h1>Role Management Page for Admin</h1>";
echo "<p><a href='logout.php'>Logout</a></p>";
?>