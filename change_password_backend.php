<?php
session_start();

// Dummy credentials for demonstration purposes
$_SESSION['user_id'] = 1; // Simulate a logged-in user
$stored_password = password_hash("currentpassword123", PASSWORD_BCRYPT); // Simulate a stored hashed password

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['change_password'])) {
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate current password
    if (!password_verify($current_password, $stored_password)) {
        $message = '<div class="error">Current password is incorrect.</div>';
    } elseif ($new_password !== $confirm_password) {
        $message = '<div class="error">New password and confirm password do not match.</div>';
    } elseif (strlen($new_password) < 6) {
        $message = '<div class="error">New password must be at least 6 characters long.</div>';
    } else {
        // Hash the new password and save (simulate database update)
        $stored_password = password_hash($new_password, PASSWORD_BCRYPT);
        $message = '<div class="success">Password changed successfully!</div>';
    }
}

// Include message in the HTML form
?>
