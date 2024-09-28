<?php 
// Include the database connection file
require_once 'DB.php';

// Create an instance of the DB class and establish a connection
$db = new DB();
$conn = $db->connect();

// Get the form data
$first_name = $_POST['first_name_'];
$last_name = $_POST['last_name_'];
$email = $_POST['email_'];
$phone = $_POST['phone_'];
$password = $_POST['password_'];

// Hash the password
$cpassword = password_hash($password, PASSWORD_DEFAULT);

try {
    // Use prepared statements to insert data
    $sql = "INSERT INTO users (first_name, last_name, email, phone, password) VALUES (:first_name, :last_name, :email, :phone, :password)";
    $stmt = $conn->prepare($sql);
    
    // Bind parameters
    $stmt->bindParam(':first_name', $first_name);
    $stmt->bindParam(':last_name', $last_name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':password', $cpassword);
    
    // Execute the statement
    if ($stmt->execute()) {
        echo 1; // Success
    } else {
        echo 0; // Failure
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}


?>