<?php
session_start();
if(!isset($_SESSION['user'])) {
    header("location: HomePage.php");
}
require_once('connection.php');

function currentBooking() {
    $username = $_SESSION['user'];
    $sql = "SELECT * FROM flight f, booking b WHERE b.username = '$username' AND f.flightno = b.flightno";
    $result = mysqli_query($GLOBALS['con'], $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table border='3'>";
        echo '<tr>';
        echo '<th>Flight No</th>';
        echo '<th>Departure</th>';
        echo '<th>Destination</th>';
        echo '<th>Travel Date</th>';
        echo '<th>Time</th>';
        echo '<th>Class</th>';
        echo '<th>Quantity</th>';
        echo '<th>Price</th>';
        echo '<th>Booking Date</th>';
        echo '</tr>';
        
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['flightno'] . '</td>';
            echo '<td>' . $row['deperture'] . '</td>';
            echo '<td>' . $row['destination'] . '</td>';
            echo '<td>' . $row['date'] . '</td>';
            echo '<td>' . $row['time'] . '</td>';
            echo '<td>' . $row['class'] . '</td>';
            echo '<td>' . $row['quantity'] . '</td>';
            echo '<td>' . $row['price'] . '</td>';
            echo '<td>' . $row['bdate'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo 'No Results';
    }
}

currentBooking();
?>

