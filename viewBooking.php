<?php
// view_bookings.php
include('config.php');  // Database connection

// Fetch bookings from database
$query = "SELECT b.id, u.username, b.booking_date, b.flight_id FROM bookings b JOIN users u ON b.user_id = u.id";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Bookings</title>
    <link rel="stylesheet" href="adminpage.css">
</head>
<body>
    <div class="wrapper">
        <div class="side_container">
            <h2>Air Ticket Booking</h2>
            <ul>
                <li><a href="Dashboard.html">Dashboard</a></li>
                <li><a href="view_users.php">View Users</a></li>
                <li><a href="view_bookings.php">View Bookings</a></li>
                <!-- Other options -->
            </ul>
        </div>

        <div class="main_content">
            <h1>Bookings List</h1>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Flight ID</th>
                        <th>Booking Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['flight_id']; ?></td>
                            <td><?php echo $row['booking_date']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

<?php
// Close connection
mysqli_close($conn);
?>
