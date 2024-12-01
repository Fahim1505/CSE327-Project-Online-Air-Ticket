<?php
// view_users.php
include('config.php');  // Database connection

// Fetch users from database
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Users</title>
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
            <h1>Users List</h1>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo $row['First Name']; ?></td>
                            <td><?php echo $row['Last Name']; ?></td>
                            <td><?php echo $row['Email']; ?></td>
                            <td><?php echo $row['Phone No']; ?></td>
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
