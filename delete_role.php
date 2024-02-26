<!-- delete_role.php -->
<?php
session_start();

if (isset($_SESSION['user']) && $_SESSION['user']['role'] === 'admin') {
    // User is an admin, allow them to delete roles
    $roles = ['admin', 'manager', 'user']; // List of existing roles

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $selectedRole = $_POST['selected_role'];

        // Check if the selected role is in the list of existing roles
        if (in_array($selectedRole, $roles)) {
            // Delete the role in your role management system
            // For this example, we'll just display a message
            echo "Role deleted: $selectedRole";
        } else {
            echo "Invalid role: $selectedRole";
        }
    }
} else {
    header('Location: login.php'); // Redirect unauthorized users
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Role</title>
</head>
<body>
    <h2>Delete Role</h2>
    <form method="POST" action="delete_role.php">
        <label>Select Role to Delete:</label>
        <select name="selected_role">
            <option value="admin">Admin</option>
            <option value="manager">Manager</option>
            <option value="user">User</option>
        </select><br><br>
        <button type="submit">Delete Role</button>
    </form>

    <a href="admin_dashboard.php">Back to Admin Dashboard</a>
</body>
</html>
