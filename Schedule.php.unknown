<?php
session_start();
if(!isset($_SESSION['user'])) {
    header("location: HomePage.php");
}
require_once('connection.php');

function schedule() {
    $sql = "SELECT * FROM flight f, seat s WHERE f.flightno = s.flightno";
    $result = mysqli_query($GLOBALS['con'], $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table border='3'>";
        echo '<tr>';
        echo '<th>Flight No</th>';
        echo '<th>Departure</th>';
        echo '<th>Destination</th>';
        echo '<th>Date</th>';
        echo '<th>Time</th>';
        echo '<th>Empty Economy Seat</th>';
        echo '<th>Economy Price</th>';
        echo '<th>Empty Premium Economy Seat</th>';
        echo '<th>Premium Economy Price</th>';
        echo '<th>Empty First Class Seat</th>';
        echo '<th>First Class Price</th>';
        echo '<th>Empty Business Class Seat</th>';
        echo '<th>Business Class Price</th>';
        echo '</tr>';
        
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['flightno'] . '</td>';
            echo '<td>' . $row['deperture'] . '</td>';
            echo '<td>' . $row['destination'] . '</td>';
            echo '<td>' . $row['date'] . '</td>';
            echo '<td>' . $row['time'] . '</td>';
            echo '<td>' . $row['cur_eco'] . '</td>';
            echo '<td>' . $row['eco_price'] . '</td>';
            echo '<td>' . $row['cur_preco'] . '</td>';
            echo '<td>' . $row['preeco_price'] . '</td>';
            echo '<td>' . $row['cur_first'] . '</td>';
            echo '<td>' . $row['first_price'] . '</td>';
            echo '<td>' . $row['cur_bus'] . '</td>';
            echo '<td>' . $row['bus_price'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo 'No Results';
    }
}

schedule();
?>
