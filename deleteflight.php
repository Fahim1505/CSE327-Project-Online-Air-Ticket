<?php
session_start();
if(!isset($_SESSION["Admin"]))
require_once("connection.php");

if(isset($_GET['flightno'])) {
   
    // Get the flight_id from the URL
    $flight_id = $_GET['flightno'];

    // Prepare and bind SQL statement to delete the row
    $stmt = $conn->prepare("DELETE FROM flight WHERE flightno = ?");
    $stmt->bind_param("i", $flight_id); // "i" for integer type

    // Execute the query
    if ($stmt->execute()) {
        echo "Flight with ID $flight_id deleted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "No flight ID specified.";
}
if (mysqli_query($con, $sql) && mysqli_query($con, $sql1)) {
    header("location: Dashboard.php");
 die;
  }

?>