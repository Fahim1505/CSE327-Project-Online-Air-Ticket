<?php
// Function to handle flight change requests
function changeFlight($booking_id, $user_id, $new_flight_details) {
    // Database configuration
    $host = 'localhost'; // Update with your database host
    $db = 'your_database_name'; // Update with your database name
    $user = 'your_username'; // Update with your database username
    $pass = 'your_password'; // Update with your database password

    try {
        // Connect to the database
        $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Check if the booking exists and belongs to the user
        $checkQuery = "SELECT * FROM bookings WHERE booking_id = :booking_id AND user_id = :user_id";
        $stmt = $pdo->prepare($checkQuery);
        $stmt->execute(['booking_id' => $booking_id, 'user_id' => $user_id]);

        if ($stmt->rowCount() > 0) {
            // Update the flight details
            $updateQuery = "UPDATE bookings SET flight_details = :new_flight_details WHERE booking_id = :booking_id AND user_id = :user_id";
            $updateStmt = $pdo->prepare($updateQuery);
            $updateStmt->execute([
                'new_flight_details' => $new_flight_details,
                'booking_id' => $booking_id,
                'user_id' => $user_id
            ]);

            echo json_encode([
                'status' => 'success',
                'message' => 'Flight details have been successfully updated.'
            ]);
        } else {
            echo json_encode([
                'status' => 'error',
                'message' => 'Booking not found or you do not have permission to modify this booking.'
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
    $booking_id = $_POST['booking_id'] ?? null; // Get booking ID from POST request
    $user_id = $_POST['user_id'] ?? null;       // Get user ID from POST request
    $new_flight_details = $_POST['new_flight_details'] ?? null; // Get new flight details from POST request

    if ($booking_id && $user_id && $new_flight_details) {
        changeFlight($booking_id, $user_id, $new_flight_details);
    } else {
        echo json_encode([
            'status' => 'error',
            'message' => 'Invalid input. All fields are required.'
        ]);
    }
}
?>
