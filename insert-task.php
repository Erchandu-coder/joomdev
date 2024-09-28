<?php 
// Include the database connection file
require_once 'DB.php';

// Create an instance of the DB class and establish a connection
$db = new DB();
$conn = $db->connect();

// Get the form data
$user_id = $_POST['user_id_'];
$start_time = $_POST['start_time_'];
$stop_time = $_POST['stop_time_'];
$note = $_POST['note_'];
$description = $_POST['description_'];

try {
    // Use prepared statements to insert data
    $sql = "INSERT INTO user_task_entries (user_id, start_time, stop_time, note, description) VALUES (:user_id, :start_time, :stop_time, :note, :description)";
    $stmt = $conn->prepare($sql);
    
    // Bind parameters
    
    $stmt->bindParam(':user_id', $user_id);
    $stmt->bindParam(':start_time', $start_time);
    $stmt->bindParam(':stop_time', $stop_time);
    $stmt->bindParam(':note', $note);
    $stmt->bindParam(':description', $description);
    
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