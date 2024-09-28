<?php
require_once 'DB.php';
require_once 'Admin.php';

// Get the database connection
$database = new DB();
$db = $database->connect();

// Create a new User object
$user = new User($db);

// Get the form input
$username = $_POST['username'];
$password = $_POST['password'];

// Attempt to log in the user
$error = $user->login($username, $password);

// If there is an error, redirect back to the login page with an error message
if ($error) {
    header('Location: login.php?error=1');
    exit();
}
?>
