function openBookingModal(airline, from, to, price, duration) {
    document.getElementById('flight-name').value = airline;
    document.getElementById('from-city').value = from;
    document.getElementById('to-city').value = to;
    document.getElementById('price').value = price;
    document.getElementById('duration').value = duration;
    document.getElementById('bookingModal').style.display = 'block';
}

function closeBookingModal() {
    document.getElementById('bookingModal').style.display = 'none';
}

// Handling form submission (optional, depends on how you plan to handle the booking)
document.getElementById('bookingForm').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Booking confirmed!');
    closeBookingModal();
});
