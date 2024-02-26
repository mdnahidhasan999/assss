<!-- create_role.php -->
<?php
session_start();

if (isset($_SESSION['user']) && $_SESSION['user']['role'] === 'admin') {
    // User is an admin, allow them to create roles
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Handle form submission for creating a new role
        $newRole = $_POST['new_role'];

        // You can add logic to save the new role in your role management system
        // For this example, we'll just display the created role
        echo "Role created: $newRole";
    }
} else {
    header('Location: login.php'); // Redirect unauthorized users
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Role</title>
</head>
<body>
    <h2>Create Role</h2>
    <form method="POST" action="create_role.php">
        <label>New Role:</label>
        <input type="text" name="new_role" required><br><br>
        <button type="submit">Create Role</button>
    </form>

    <a href="admin_dashboard.php">Back to Admin Dashboard</a>
</body>
</html>
