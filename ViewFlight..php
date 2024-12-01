<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="HomePage.css">
    <script src="https://kit.fontawesome.com/cea56aa947.js" crossorigin="anonymous"></script>
</head>
<body>
   
    <div class="wrapper">
        <!-- Sidebar containing navigation links -->
        <div class="side_container">
            <h2>Air Ticket Booking</h2>
            <div class="image">
                <!-- Placeholder image for the airline -->
                <img src="Blank_Image.png" alt="image">
            </div>
            
            <ul>
                <!-- Navigation links for different sections -->
                <li><a href="Dashboard.html"><i class="fas fa-home"></i>Dashboard</a></li>
                <li><a href="Schedule.html"><i class="fa-regular fa-clock time-icon"></i> Schedule</a></li>
                <li><a href="Booking.html"><i class="fa-solid fa-calendar-check"></i> Booking</a></li>
                <li><a href="CancelBooking.html"><i class="fa-solid fa-xmark"></i> Cancel Booking</a></li>
                <li><a href="View.html"><i class="fa-solid fa-eye"></i> View</a></li>
                <li><a href="ViewFlight.html"><i class="fa-solid fa-plane"></i> Flight</a></li> 
                <li><a href="ChangeFlight.html"><i class="fa-solid fa-plane"></i> Change Flight</a></li>
                <li><a href="DeleteFlight.html"><i class="fa-solid fa-trash"></i> Delete Flight</a></li>
            </ul> 
            <div class="social_media">
                <!-- Social media links -->
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <!-- Main content section -->
        <div class="main_content">
            <div class="header">
                <!-- Search container -->
                <div class="search_container">
                    <form method="post" action="">
                        <input type="search" placeholder="Search..." name="">
                        <button type="submit">Search</button>
                    </form>
                </div>

                <!-- Logout link -->
                <div class="logout_container">
                    <a href="#"><span class="logout">Logout</span></a>
                </div>
            </div> 
        </div> 

        <!-- Section for displaying airline options -->
        <div class="Tickets"> 
            
            <div class="airline">
                <!-- Qatar Airways section -->
                <a>
                    <img href='#'src="qatar.png" alt="">
                </a>
                <a href="#" class="my-btn">
                    Explore Qatar Airways
                </a>
            </div>
            
            <div class="airline">
                <!-- Singapore Airways section -->
                <a>
                    <img href='#'src="sing.png" alt="">
                </a>
                <a href="#" class="my-btn">
                    Explore Singapore Airways
                </a>
            </div>

            <div class="airline">
                <!-- Biman Airways section -->
                <a>
                    <img href='#'src="biman.png" alt="">
                </a>
                <a href="#" class="my-btn">
                    Explore Biman Airways
                </a>
            </div>
        </div>
    </div>

    <!-- Modal for displaying flight details (hidden initially) -->
    <div class="modal" id="my-modal">
        <div class="modal-content">
            <!-- Close button for the modal -->
            <span class="close">&times;</span>
            <div>
                <!-- This section will dynamically display flight departure and destination -->
                <p><?php echo $row["dep"]?> -> <?php echo $row["des"]?> </p>
            </div>
        </div>
    </div>

    <!-- Including Ionicons for icons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- JavaScript for handling modal behavior -->
    <script>
    var modal = document.getElementById("my-modal");
    var btn = document.querySelectorAll(".my-btn"); // Select all buttons that open the modal
    var span = document.getElementsByClassName("close")[0]; // Get the close button of the modal

    // Function to display the modal
    function openModal() {
        modal.style.display = "block";
    }

    // Add click event listeners to all the buttons that should open the modal
    btn.forEach(function(e) {
        e.addEventListener('click', openModal);
    });

    // When the close button is clicked, hide the modal
    span.onclick = function() {
        modal.style.display = "none";
    }    

    // When the user clicks outside the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    } 
    </script>
</body>
</html>


    } 
    </script>
</body>
</html>
