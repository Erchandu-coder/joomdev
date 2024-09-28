<?php
class User {
    private $conn;
    private $table = 'admin'; // Assume you have a 'users' table in the database

    public function __construct($db) {
        $this->conn = $db;
    }

    public function login($username, $password) {
        // Prepare a query to fetch the user from the database
        $query = "SELECT * FROM " . $this->table . " WHERE username = :username LIMIT 1";
        $stmt = $this->conn->prepare($query);

        // Bind the username parameter
        $stmt->bindParam(':username', $username);

        // Execute the query
        $stmt->execute();

        // Check if a user was found
        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            // Verify the password (assuming it's hashed)
            if (password_verify($password, $user['password'])) {
                // Start a session and store user information
                session_start();
                $_SESSION['admin_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];

                // Redirect to admin page
                header('Location: dashboard.php');
                exit();
            } else {
                return "Invalid username or password.";
            }
        } else {
            return "Invalid username or password.";
        }
    }

    public function is_logged_in() {
        // Check if the session contains user data
        return isset($_SESSION['user_id']);
    }

    public function logout() {
        // Destroy the session
        session_start();
        session_destroy();
        header('Location: index.php');
        exit();
    }
}
?>
