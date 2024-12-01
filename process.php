

?>
<?php
// Start the session
session_start();

// Sample credentials (for demonstration purposes)
$valid_username = "admin";
$valid_password = "password123";

// Get the submitted form data
$username = trim($_POST['username']);
$password = trim($_POST['password']);

// Check if the username and password are correct
if ($username === $valid_username && $password === $valid_password) {
    // Set session variables
    $_SESSION['username'] = $username;
    
    // Redirect to the homepage
    header("Location: homepage.html");
    exit();
} else {
    // Redirect back to the login page with an error
    header("Location: login.html?error=Invalid username or password");
    exit();
}
?>
