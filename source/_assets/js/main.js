import Swal from "sweetalert2";
import 'sweetalert2/dist/sweetalert2.css';

window.Swal = Swal;


document.addEventListener('DOMContentLoaded', function () {
    const items = document.querySelectorAll('[data-carousel-item]');
    const indicators = document.querySelectorAll('[data-carousel-slide-to]');
    let currentIndex = 0;

    function showSlide(index) {
        items.forEach((item, i) => {
            item.classList.toggle('hidden', i !== index);
            indicators[i].setAttribute('aria-current', i === index ? 'true' : 'false');
        });
        currentIndex = index;
    }

    // Initialize with first slide visible
    showSlide(currentIndex);

    // Event listeners for next/previous buttons
    document.querySelector('[data-carousel-next]').addEventListener('click', () => {
        showSlide((currentIndex + 1) % items.length);
    });

    document.querySelector('[data-carousel-prev]').addEventListener('click', () => {
        showSlide((currentIndex - 1 + items.length) % items.length);
    });

    // Event listeners for indicator buttons
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => showSlide(index));
    });

// contact-alert
const contactForm = document.querySelector('form');
if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();

        // Get form fields
        const name = document.getElementById('Name').value.trim();
        const phone = document.getElementById('Phone').value.trim(); 
        const email = document.getElementById('Email').value.trim();
        const subject = document.getElementById('subject').value.trim();
        const message = document.getElementById('message').value.trim();

        // Validate fields
        if (!name || !phone || !email || !subject || !message) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please fill in all fields!',
                confirmButtonColor: '#3B82F6'
            });
            return;
        }

        // Email validation
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            Swal.fire({
                icon: 'error',
                title: 'Invalid Email',
                text: 'Please enter a valid email address',
                confirmButtonColor: '#3B82F6'
            });
            return;
        }

        // Phone validation - basic 10 digit check
        const phoneRegex = /^\d{10}$/;
        if (!phoneRegex.test(phone)) {
            Swal.fire({
                icon: 'error',
                title: 'Invalid Phone Number',
                text: 'Please enter a valid 10-digit phone number',
                confirmButtonColor: '#3B82F6'
            });
            return;
        }

        // If validation passes, show success message
        Swal.fire({
            icon: 'success',
            title: 'Thank you!',
            text: 'Your message has been sent successfully.',
            confirmButtonColor: '#3B82F6'
        }).then((result) => {
            if (result.isConfirmed) {
                contactForm.submit();
            }
        });
    });
}

});
