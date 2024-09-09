let bannerIndex = 0;
const banners = [
    'img/banner1.jpg',
    'img/banner2.jpg',
    'img/banner3.jpg'
];

function changeBanner() {
    bannerIndex = (bannerIndex + 1) % banners.length;
    document.querySelector('.banner img').src = banners[bannerIndex];
}

setInterval(changeBanner, 5000); // Change every 5 seconds
