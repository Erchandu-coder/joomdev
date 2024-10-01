<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php'); // Redirect to login if not logged in
    exit;
}

// Include the DB class
require 'db.php';  // Make sure the path is correct

// Initialize the database connection
$database = new DB();
$db = $database->connect();  // Now $db will be your PDO object

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];
    $user_id = $_POST['user_id']; // The ID of the user whose password is being updated

    // Validate password fields
    if (strlen($new_password) < 6) {
        echo "Password should be at least 6 characters long.";
        exit;
    }

    if ($new_password !== $confirm_password) {
        echo "Passwords do not match.";
        exit;
    }

    // Hash the new password
    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

    // Prepare and execute the password update query
    $stmt = $db->prepare("UPDATE users SET password = :password WHERE id = :user_id");
    $stmt->bindParam(':password', $hashed_password);
    $stmt->bindParam(':user_id', $user_id);
    // Execute the query and check if it was successful
    if ($stmt->execute()) {
        echo "Password updated successfully.";
        // Optionally, redirect to the admin dashboard
        header('Location: login.php');
        exit;
    } else {
        echo "Error updating password.";
    }
}
?>

