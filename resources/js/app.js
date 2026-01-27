import './bootstrap';
import Swiper from 'swiper';
import { Navigation, Pagination, Autoplay } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

document.addEventListener('DOMContentLoaded', () => {
    if (document.querySelector('.project-swiper')) {
        const swiper = new Swiper('.project-swiper', {
            modules: [Navigation, Pagination, Autoplay],
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                type: 'fraction',
                renderFraction: function (currentClass, totalClass) {
                    return '<span class="' + currentClass + ' font-heading font-black text-2xl"></span>' +
                        '<span class="font-heading font-black text-2xl mx-1">/</span>' +
                        '<span class="' + totalClass + ' font-heading font-black text-2xl"></span>';
                }
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            spaceBetween: 30,
        });
    }
});
