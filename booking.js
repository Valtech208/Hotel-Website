const bookingForm = document.getElementById('bookingForm');
    const successMsg = document.getElementById('successMsg');

    bookingForm.addEventListener('submit', function(e) {
        e.preventDefault();

        // Basic validation: Check that check-out is after check-in
        const checkin = new Date(document.getElementById('checkin').value);
        const checkout = new Date(document.getElementById('checkout').value);

        if (checkout <= checkin) {
            alert('Check-out date must be after check-in date.');
            return;
        }

        // Show success message
        successMsg.style.display = 'block';

        // Optional: Reset form after booking
        bookingForm.reset();
    });
