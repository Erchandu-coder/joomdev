<?php
session_start();
require_once 'DB.php';
require_once 'Admin.php';

// Get the database connection
$database = new DB();
$db = $database->connect();

// Create a new User object
$user = new User($db);

// Call the logout method
$user->logout();
?>
