<?php
// Database configuration
$host = 'localhost';        // Database host (usually 'localhost')
$dbname = 'online_air_ticket'; // Name of your database
$username = 'root';          // Database username
$password = '';              // Database password (empty for default XAMPP setup)

try {
    // Create a new PDO instance
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    
    // Set error reporting mode
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    // If an error occurs, display a message and terminate the script
    
    die("Database connection failed: " . $e->getMessage());
}
?>
