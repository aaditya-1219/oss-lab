<?php
$valid_username = "admin";
$valid_password = "password123";

$username = $_POST['username'];
$password = $_POST['password'];

if ($username === $valid_username && $password === $valid_password) {
    // navigate to welcome page after successful login
    header("Location: welcome.php");
    exit();
} else {
    echo "<script>alert('Invalid username or password. Please try again.'); window.location.href = 'login.php';</script>";
}
?>