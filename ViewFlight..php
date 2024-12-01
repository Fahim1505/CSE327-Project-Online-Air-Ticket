

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
        <div class="side_container">
            <h2>Air Ticket Booking</h2>
            <div class="image">
                <img src="Blank_Image.png" alt="image">
            </div>
            
            <ul>
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
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <div class="main_content">
            <div class="header">
                <div class="search_container">
                    <form method="post" action="">
                        <input type="search" placeholder="Search..." name="">
                        <button type="submit">Search</button>
                    </form>
                </div>

                <div class="logout_container">
                    <a href="#"><span class="logout">Logout</span></a>
                </div>
            </div> 
       
        
        </div> 
        <div class="Tickets"> 
            
                <div class="airline">
                <a>
                  <img href='#'src="qatar.png" alt="">
                   
                </a>
                <a href="#" class="my-btn">
                    Explore Qatar Airways
                </a>
            </div>
                <div class="airline">
                    <a>
                        <img href='#'src="sing.png" alt="">
                         
                      </a>
                      <a href="#" class="my-btn">
                          Explore Singapore Airways
                      </a>
                </div>
                <div class="airline">
                    <a>
                        <img href='#'src="biman.png" alt="">
                         
                      </a>
                      <a href="#" class="my-btn">
                          Explore Biman Airways
                      </a>
                </div>
        </div>
        </div>
    </div>
    <div class="modal" id="my-modal">
       <div class="modal-content">
        <span class="close">
            &times;
        </span>
        <div>
            <p><?php echo $row["dep"]?> -> <?php echo $row["des"]?> </p>
        </div>
        <p>
            
        </p>
        <p>
            <?php echo $row["dep"]?> -> <?php echo $row["des"]?>
        </p>
    </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
    var modal=document.getElementById("my-modal");
    //var btn=document.getElementById("my-btn");
      var btn=document.querySelectorAll(".my-btn");
    var span=document.getElementsByClassName("close")[0];
   // btn.onclick=function(){
       // modal.style.display="block";
   // }
   function openModal(){
    modal.style.display="block";
   }
   btn.forEach(function(e){
    e.addEventListener('click',openModal);
   })
    span.onclick=function(){
        modal.style.display="none";
    }    
    window.onclick=function(event){
       if(event.target==modal){
        modal.style.display="none";
       }
       
    } 
    </script>
</body>
</html>
