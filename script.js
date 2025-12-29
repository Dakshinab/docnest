let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};

var swiper = new Swiper(".home-slider", {
    loop: true,
    autoplay: {
        delay: 3500, // 3 seconds
        disableOnInteraction: false, // Keep autoplay running even after user interaction
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    }
});

// initialize reviews slider
var reviewsSwiper = new Swiper(".reviews-slider", {
    loop: true,
    spaceBetween: 20,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".reviews .swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".reviews .swiper-button-next",
        prevEl: ".reviews .swiper-button-prev",
    },
    breakpoints: {
        0: { slidesPerView: 1 },
        768: { slidesPerView: 2 },
        1024: { slidesPerView: 3 }
    }
});
