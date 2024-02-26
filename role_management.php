<!-- role_management.php -->
<?php
session_start();

if (isset($_SESSION['user']) && $_SESSION['user']['role'] === 'admin') {
    // Display role management functionality here
    echo 'Welcome, Admin!';
} else {
    header('Location: login.php'); // Redirect unauthorized users
}
?>
