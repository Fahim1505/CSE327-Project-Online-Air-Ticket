<?php
            if (isset($_GET['message'])) {
                echo "<p style='color: green;'>" . htmlspecialchars($_GET['message']) . "</p>";
            }
            ?>
<!DOCTYPE html>
<html lang="en">
<!--Checked 25/11/2024-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Air Ticket Booking</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo"><a href="#">Air Ticket</a></div>
            <ul class="nav-links"> <!--Naviation link-->

                <li><a href="index.php">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="Registration.php">Registration</a></li>
                <li><a href="login.php">Log In</a></li>
                <li><a href="adminlogin.html">Admin LogIn</a></li>
            </ul>
        </nav>
        <div class="header-content">
            <h1>Community of Airport</h1>
            <p>Booking Air Ticket Online And Enjoy Your Journey</p>

        </div>
    </header>
    <main>
        <section class="features">
            <h2>Features</h2>
            <div class="feature-cards">
                <div class="feature-card">
                    <i class="fa-solid fa-calendar-check"></i>
                    <h3><a href="">Booking Ticket</a></h3> <!-- Link added here --> 
                    
                    <p>Easily you can book your desire locations ticket.</p>
                </div>
                <div class="feature-card">
                    <i class="fa-solid fa-xmark"></i>
                    <h3>Cancel Booking</h3>
                    <p>You will have limited time access for cancel the booking.</p>
                </div>
                <div class="feature-card">
                    <i class="fa-regular fa-clock time-icon"></i>
                    <h3>Schedule</h3>
                    <p>Everyone can see the timing of the flights.</p>
                </div>
                <div class="feature-card">
                    <i class="fa-solid fa-eye"></i>
                    <h3>View Flights</h3>
                    <p>Everyone can view the available flights.</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-list"></i>
                    <h3>List of Current Booking</h3>
                    <p>List of the passengers who booked the tickets.</p>
                </div>
                <div class="feature-card">
                    <i class="fa-solid fa-trash"></i>
                    <h3>Delete Flights</h3>
                    <p>Only admin can delete the flights if they are unavailable.</p>
                </div>
            </div>
        </section>
        
    </main>
    <footer>
        <p>&copy;  2024 Online Air Ticket Booking System. All rights reserved.   </p>
    </footer>
</body>
</html>