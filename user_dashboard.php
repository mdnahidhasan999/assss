<!-- user_dashboard.php -->
<?php
session_start();

if (isset($_SESSION['user']) && $_SESSION['user']['role'] === 'user') {
    // Display user-specific functionality here
    echo 'Welcome, User!';
} else {
    header('Location: login.php'); // Redirect unauthorized users
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
</head>
<body>
    <h2>User Dashboard</h2>

    <!-- Add your user-specific functionality here -->

    <!-- Example: Display user-specific content -->
    <p>This is the user dashboard. You can access your content here.</p>

    <!-- Add other user-specific content here -->

    <a href="logout.php">Logout</a>
</body>
</html>
