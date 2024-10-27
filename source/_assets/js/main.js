




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
});
