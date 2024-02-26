<!-- logout.php -->
<?php
session_start();
session_destroy(); // Destroy the user's session data

header('Location: login.php'); // Redirect to the login page
exit();
?>
