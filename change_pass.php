<?php
session_start();

// Simulating stored hashed password and user session (replace with real database in production)
$_SESSION['user_id'] = 1; // Simulated logged-in user ID
$stored_password = password_hash("currentpassword123", PASSWORD_BCRYPT); // Simulated hashed current password

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['change_password'])) {
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate current password
    if (!password_verify($current_password, $stored_password)) {
        $message = '<div class="error">The current password you entered is incorrect. Please try again.</div>';
    } elseif ($new_password !== $confirm_password) {
        $message = '<div class="error">The new password and confirmation password do not match.</div>';
    } elseif (strlen($new_password) < 6) {
        $message = '<div class="error">The new password must be at least 6 characters long.</div>';
    } elseif (password_verify($new_password, $stored_password)) {
        $message = '<div class="error">The new password cannot be the same as the current password. Please choose a different password.</div>';
    } else {
        // Simulate password update
        $stored_password = password_hash($new_password, PASSWORD_BCRYPT);
        $message = '<div class="success">Password changed successfully!</div>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        .error, .success {
            text-align: center;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 15px;
        }
        .error {
            background-color: #f8d7da;
            color: #721c24;
        }
        .success {
            background-color: #d4edda;
            color: #155724;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Change Password</h2>
        <?php if (isset($message)) echo $message; ?>
        <form method="POST" action="">
            <label for="current_password">Current Password</label>
            <input type="password" id="current_password" name="current_password" required>
            
            <label for="new_password">New Password</label>
            <input type="password" id="new_password" name="new_password" required>
            
            <label for="confirm_password">Confirm Password</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
            
            <button type="submit" name="change_password">Change Password</button>
        </form>
    </div>
</body>
</html>
