import './bootstrap';
import 'preline'

import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

document.addEventListener('DOMContentLoaded', () => {
    new Swiper('.swiper-container', {
        loop: true,
        spaceBetween: 30,
        autoplay: {
            delay: 3000,
        },
        //pagination: {
        //    el: '.swiper-pagination',
        //    clickable: true,
        //},
        breakpoints: {
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        }
    });
});
