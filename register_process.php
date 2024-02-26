<!-- register_process.php -->
<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $role = $_POST['role']; // Get the selected role from the form

    $user = [
        'username' => $username,
        'email' => $email,
        'password' => $password,
        'role' => $role
    ];

    // Replace 'users.json' with your data storage method (e.g., database)
    $users = json_decode(file_get_contents('users.json'), true);
    $users[] = $user;

    file_put_contents('users.json', json_encode($users));

    // Redirect to login page or a dashboard
    header('Location: login.php');
}
