<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight Booking System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="header">
        <h1>Flight Booking System</h1>
    </header>

    <main class="container">
        <section class="booking-form">
            <h2>Book Your Flight</h2>
            <form>
                <div class="form-group">
                    <label for="from">From</label>
                    <input type="text" id="from" placeholder="City or Airport">
                </div>
                <div class="form-group">
                    <label for="to">To</label>
                    <input type="text" id="to" placeholder="City or Airport">
                </div>
                <div class="form-group">
                    <label for="departure-date">Departure Date</label>
                    <input type="date" id="departure-date">
                </div>
                <div class="form-group">
                    <label for="return-date">Return Date</label>
                    <input type="date" id="return-date">
                </div>
                <div class="form-group">
                    <label for="passengers">Passengers</label>
                    <select id="passengers">
                        <option value="1">1 Passenger</option>
                        <option value="2">2 Passengers</option>
                        <option value="3">3 Passengers</option>
                        <option value="4">4 Passengers</option>
                    </select>
                </div>
                <button type="submit" class="btn">Search Flights</button>
            </form>
        </section>

        <section class="flight-results">
            <h2>Available Flights</h2>
            <!-- Flight 1 -->
            <div class="flight-card">
                <div class="flight-header">
                    <span class="flight-name">Airline 1</span>
                    <span class="flight-time">10:00 AM</span>
                </div>
                <div class="flight-details">
                    <p><strong>From:</strong> New York (JFK)</p>
                    <p><strong>To:</strong> London (LHR)</p>
                    <p><strong>Price:</strong> $450</p>
                    <p><strong>Duration:</strong> 7h 45m</p>
                    <button class="btn-book" onclick="openBookingModal('Airline 1', 'New York', 'London', '$450', '7h 45m')">Book Now</button>
                </div>
            </div>

            <!-- Flight 2 -->
            <div class="flight-card">
                <div class="flight-header">
                    <span class="flight-name">Airline 2</span>
                    <span class="flight-time">12:00 PM</span>
                </div>
                <div class="flight-details">
                    <p><strong>From:</strong> Los Angeles (LAX)</p>
                    <p><strong>To:</strong> Tokyo (NRT)</p>
                    <p><strong>Price:</strong> $850</p>
                    <p><strong>Duration:</strong> 10h 30m</p>
                    <button class="btn-book" onclick="openBookingModal('Airline 2', 'Los Angeles', 'Tokyo', '$850', '10h 30m')">Book Now</button>
                </div>
            </div>

            <!-- Flight 3 -->
            <div class="flight-card">
                <div class="flight-header">
                    <span class="flight-name">Airline 3</span>
                    <span class="flight-time">2:00 PM</span>
                </div>
                <div class="flight-details">
                    <p><strong>From:</strong> Paris (CDG)</p>
                    <p><strong>To:</strong> Dubai (DXB)</p>
                    <p><strong>Price:</strong> $650</p>
                    <p><strong>Duration:</strong> 6h 15m</p>
                    <button class="btn-book" onclick="openBookingModal('Airline 3', 'Paris', 'Dubai', '$650', '6h 15m')">Book Now</button>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <p>&copy; 2024 Flight Booking System. All rights reserved.</p>
    </footer>

    <!-- Book Now Modal -->
    <div id="bookingModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeBookingModal()">&times;</span>
            <h2>Flight Booking</h2>
            <form id="bookingForm">
                <div class="form-group">
                    <label for="flight-name">Airline</label>
                    <input type="text" id="flight-name" readonly>
                </div>
                <div class="form-group">
                    <label for="from-city">From</label>
                    <input type="text" id="from-city" readonly>
                </div>
                <div class="form-group">
                    <label for="to-city">To</label>
                    <input type="text" id="to-city" readonly>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" id="price" readonly>
                </div>
                <div class="form-group">
                    <label for="duration">Duration</label>
                    <input type="text" id="duration" readonly>
                </div>
                <div class="form-group">
                    <label for="passenger-name">Passenger Name</label>
                    <input type="text" id="passenger-name" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label for="contact">Contact</label>
                    <input type="text" id="contact" placeholder="Enter your contact" required>
                </div>
                <button type="submit" class="btn">Confirm Booking</button>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
