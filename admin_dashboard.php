<!-- admin_dashboard.php -->
<?php
session_start();

if (isset($_SESSION['user']) && $_SESSION['user']['role'] === 'admin') {
    // Display role management functionality here
    echo 'Welcome, Admin!';
} else {
    header('Location: login.php'); // Redirect unauthorized users
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
    <h2>Admin Dashboard</h2>

    <!-- Add your role management functionality here -->
    <h3>Role Management</h3>
    <ul>
        <li><a href="create_role.php">Create Role</a></li>
        <li><a href="edit_role.php">Edit Role</a></li>
        <li><a href="delete_role.php">Delete Role</a></li>
    </ul>

    <!-- Add other admin-specific content here -->

    <a href="logout.php">Logout(<?php echo $_SESSION['role']?>)</a>
</body>
</html>
