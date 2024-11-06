import Swal from "sweetalert2";
import 'sweetalert2/dist/sweetalert2.css';
window.Swal


document.addEventListener('DOMContentLoaded', function() {
    console.log("shubham")
    const contactForm = document.getElementById('contactForm');
    
    if (contactForm) {
        contactForm.addEventListener('submit', async function(e) {
            e.preventDefault();

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
                    // Show success message
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: 'Your message has been sent successfully.',
                        confirmButtonColor: '#3B82F6'
                    });

                    // Reset form
                    contactForm.reset();
                } else {
                    throw new Error('Network response was not ok');
                }
            } catch (error) {
                // Show error message
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong! Please try again later.',
                    confirmButtonColor: '#3B82F6'
                });
                console.error('Error:', error);
            }
        });
    }
});
