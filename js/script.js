let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

// Toggle navbar
menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
    document.body.style.overflow = navbar.classList.contains('active') ? 'hidden' : 'auto';
};

// Dropdown handling
document.querySelectorAll('.dropdown > a').forEach(drop => {
    drop.onclick = (e) => {
        if (window.innerWidth <= 768) {
            e.preventDefault();
            let parent = drop.parentElement;
            document.querySelectorAll('.dropdown').forEach(d => {
                if (d !== parent) d.classList.remove('active');
            });
            parent.classList.toggle('active');
        }
    };
});

// Scroll reset
window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
    document.body.style.overflow = 'auto';
    document.querySelectorAll('.dropdown').forEach(d => d.classList.remove('active'));
};

// Initialize all Swiper sliders after DOM loads
document.addEventListener('DOMContentLoaded', function() {
    // Home slider
    new Swiper(".home-slider", {
        loop: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        }
    });

    // Reviews slider
    new Swiper(".reviews-slider", {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 20,
        grabCursor: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            640: { slidesPerView: 1 },
            768: { slidesPerView: 2 },
            1024: { slidesPerView: 3 }
        }
    });
});