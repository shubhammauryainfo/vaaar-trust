import Swal from "sweetalert2";
import 'sweetalert2/dist/sweetalert2.css';
window.Swal;

document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contactForm');
    const submitButton = document.getElementById('submitButton'); // Button ID should be added in the HTML form

    if (contactForm) {
        contactForm.addEventListener('submit', async function(e) {
            e.preventDefault();

            // Set button text to 'Sending...' and disable it
            submitButton.textContent = 'Sending...';
            submitButton.disabled = true;

            // Get form data
            const formData = {
                name: document.getElementById('Name').value,
                phone: document.getElementById('Phone').value, 
                email: document.getElementById('Email').value,
                subject: document.getElementById('subject').value,
                message: document.getElementById('message').value
            };

            try {
                const response = await fetch('https://vaaar-backend.onrender.com/api/forms', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(formData)
                });

                if (response.ok) {
                    // Show success message and set button text to 'Sent'
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: 'Your message has been sent successfully.',
                        confirmButtonColor: '#3B82F6'
                    });
                    submitButton.textContent = 'Sent';

                    // Reset form
                    contactForm.reset();
                } else {
                    throw new Error('Network response was not ok');
                }
            } catch (error) {
                // Show error message and revert button to 'Send'
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong! Please try again later.',
                    confirmButtonColor: '#3B82F6'
                });
                console.error('Error:', error);
            } finally {
                // Reset button after a delay
                setTimeout(() => {
                    submitButton.textContent = 'Send';
                    submitButton.disabled = false;
                }, 2000);
            }
        });
    }
});
