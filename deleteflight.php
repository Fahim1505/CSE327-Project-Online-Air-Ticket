<?php
// Start the session to access session variables
session_start();

// Check if the "Admin" session is set, meaning only an admin user can access this page
// If not, the code will not proceed further
if(!isset($_SESSION["Admin"])) 


require_once("connection.php");

// Check if a flight ID ('flightno') is passed in the URL as a GET parameter
if (isset($_GET['flightno'])) {

    // Get the flight ID from the URL
    $flight_id = $_GET['flightno'];

    // Prepare SQL statement to delete the flight record with the given flight ID
    // The "?" is a placeholder for a parameter (flight ID)
    $stmt = $conn->prepare("DELETE FROM flight WHERE flightno = ?");
    
    // Bind the flight ID parameter to the prepared statement
    // The "i" specifies that the parameter is an integer type
    $stmt->bind_param("i", $flight_id);

    // Execute the query to delete the flight
    if ($stmt->execute()) {
        // If the query was successful, output success message
        echo "Flight with ID $flight_id deleted successfully.";
    } else {
        // If the query failed, output the error message
        echo "Error: " . $stmt->error;
    }

    // Close the prepared statement to free resources
    $stmt->close();

    // Close the database connection to free resources
    $conn->close();
} else {
    // If no flight ID was passed in the URL, output an error message
    echo "No flight ID specified.";
}




if (mysqli_query($con, $sql) && mysqli_query($con, $sql1)) {
    header("Location: Dashboard.php");
    die; // Stop further execution after redirecting
}

?>
