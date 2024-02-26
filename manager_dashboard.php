<!-- manager_dashboard.php -->
<?php
session_start();

if (isset($_SESSION['user']) && $_SESSION['user']['role'] === 'manager') {
    // Display manager-specific functionality here
    echo 'Welcome, Manager!';
} else {
    header('Location: login.php'); // Redirect unauthorized users
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manager Dashboard</title>
</head>
<body>
    <h2>Manager Dashboard</h2>

    <!-- Add your manager-specific functionality here -->

    <!-- Example: Display a list of employees -->
    <h3>Employee List</h3>
    <ul>
        <li>Employee 1</li>
        <li>Employee 2</li>
        <li>Employee 3</li>
        <!-- You can fetch and display employee data from a database here -->
    </ul>

    <!-- Add other manager-specific content here -->

    <a href="logout.php">Logout</a>
</body>
</html>
