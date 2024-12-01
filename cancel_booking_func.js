function cancelBooking(bookingId, userId) {
    $.ajax({
        url: 'cancel_booking.php', // Path to the PHP file
        type: 'POST',
        data: {
            booking_id: bookingId,
            user_id: userId
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
