import Alpine from 'alpinejs';
import { Swiper } from 'swiper';

window.Alpine = Alpine;
Alpine.start();

const swiper = new Swiper('.serviceSwiper', {
    direction: 'horizontal',
    spaceBetween: 30,
    autoplay: {
        delay: 3000
    },
    pagination: {
        el: ".swiper-pagination",
        type: "progressbar",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        992: {
            slidesPerView: 3,
        },
        768: {
            slidesPerView: 2,
        }
    }
});
