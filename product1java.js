const carousel = document.querySelector('.carousel');
const images = document.querySelectorAll('.carousel-image');
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');
let currentIndex = 0;
let touchStartX = 0;
let touchEndX = 0;

// Function to show the active image
function showImage(index) {
    images.forEach((img, i) => {
        img.classList.remove('active');
        if (i === index) {
            img.classList.add('active');
        }
    });
}

// Event listener for next button
nextBtn.addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % images.length;
    showImage(currentIndex);
});

// Event listener for previous button
prevBtn.addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    showImage(currentIndex);
});

// Touch events for mobile swiping
carousel.addEventListener('touchstart', (e) => {
    touchStartX = e.changedTouches[0].screenX;  // Capture the start X position
});

carousel.addEventListener('touchend', (e) => {
    touchEndX = e.changedTouches[0].screenX;  // Capture the end X position
    handleSwipe();
});

function handleSwipe() {
    if (touchEndX < touchStartX - 50) {  // Swipe left (threshold set to 50px)
        currentIndex = (currentIndex + 1) % images.length;
        showImage(currentIndex);
    }
    if (touchEndX > touchStartX + 50) {  // Swipe right (threshold set to 50px)
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        showImage(currentIndex);
    }
}
