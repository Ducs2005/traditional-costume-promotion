let bannerIndex = 0;
const banners = [
    'img/banner/banner1.jpg',
    'img/banner/banner2.jpg',
    'img/banner/banner3.jpg'
];

function changeBanner() {
    bannerIndex = (bannerIndex + 1) % banners.length;
    document.querySelector('.banner img').src = banners[bannerIndex];
    updateDots();
}

function updateDots() {
    const dots = document.querySelectorAll('.dot');
    dots.forEach((dot, index) => {
        dot.classList.toggle('active', index === bannerIndex);
    });
}

function goToBanner(index) {
    bannerIndex = index;
    document.querySelector('.banner img').src = banners[bannerIndex];
    updateDots();
}

// Set up dot click events
document.querySelectorAll('.dot').forEach((dot, index) => {
    dot.addEventListener('click', () => goToBanner(index));
});

setInterval(changeBanner, 5000); // Change every 5 seconds

updateDots();

