function changeFlight() {
    const bookingId = document.getElementById('booking_id').value;
    const userId = document.getElementById('user_id').value;
    const newFlightDetails = document.getElementById('new_flight_details').value;

    $.ajax({
        url: 'change_flight.php', // Path to the PHP file
        type: 'POST',
        data: {
            booking_id: bookingId,
            user_id: userId,
            new_flight_details: newFlightDetails
        },
        success: function(response) {
            const result = JSON.parse(response);
            alert(result.message);
        },
        error: function() {
            alert('Error processing the request.');
        }
    });
}
