<?php
// Function to handle booking cancellation
function cancelBooking($booking_id, $user_id) {
    // Database configuration
    $host = 'localhost'; // Update with your database host
    $db = 'your_database_name'; // Update with your database name
    $user = 'your_username'; // Update with your database username
    $pass = 'your_password'; // Update with your database password

    try {
        // Connect to the database
        $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Check if booking exists and belongs to the user
        $checkQuery = "SELECT * FROM bookings WHERE booking_id = :booking_id AND user_id = :user_id AND status = 'active'";
        $stmt = $pdo->prepare($checkQuery);
        $stmt->execute(['booking_id' => $booking_id, 'user_id' => $user_id]);

        if ($stmt->rowCount() > 0) {
            // Update the booking status to 'cancelled'
            $updateQuery = "UPDATE bookings SET status = 'cancelled' WHERE booking_id = :booking_id AND user_id = :user_id";
            $updateStmt = $pdo->prepare($updateQuery);
            $updateStmt->execute(['booking_id' => $booking_id, 'user_id' => $user_id]);

            echo json_encode([
                'status' => 'success',
                'message' => 'Booking has been successfully cancelled.'
            ]);
        } else {
            echo json_encode([
                'status' => 'error',
                'message' => 'Booking not found or already cancelled.'
            ]);
        }
    } catch (PDOException $e) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Database error: ' . $e->getMessage()
        ]);
    }
}

// Example usage
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $booking_id = $_POST['booking_id'] ?? null;
    $user_id = $_POST['user_id'] ?? null;

    if ($booking_id && $user_id) {
        cancelBooking($booking_id, $user_id);
    } else {
        echo json_encode([
            'status' => 'error',
            'message' => 'Invalid input. Booking ID and User ID are required.'
        ]);
    }
}
?>
