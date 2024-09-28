<?php
session_start();
require_once 'DB.php';
require_once 'User.php';

// Initialize the DB connection
$database = new DB();
$db = $database->connect();

// Initialize the User object
$user = new User($db);

// Get the form data
$email = $_POST['email'];
$password = $_POST['password'];

// Check if the email and password are set
if (!empty($email) && !empty($password)) {
    // Try to log in the user
    $loggedInUser = $user->login($email, $password);

    if ($loggedInUser) {
        // Login successful, set session variables
        $_SESSION['user_id'] = $loggedInUser['id'];
        $_SESSION['user_email'] = $loggedInUser['email'];
        $_SESSION['first_name'] = $loggedInUser['first_name'];
        echo "Login successful! Welcome, " . $loggedInUser['first_name'];
        // Redirect to dashboard or homepage
        header('Location: dashboard.php');
    } else {
        echo "Invalid email or password!";
    }
} else {
    echo "Please enter both email and password.";
}
?>