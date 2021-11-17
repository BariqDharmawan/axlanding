import Swiper, { Navigation, Pagination } from 'swiper';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

const sliderThirdOnDesktopOneOnMobile = new Swiper('.slider-third-on-desktop-one-on-mobile', {
    modules: [Navigation, Pagination],
    observer: true,
    observeParents: true,
    breakpoints: {
        320: {
            spaceBetween: 20,
            slidesPerView: 1,
        },
        992: {
            slidesPerView: 3,
            spaceBetween: 70
        }
    },
    pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
        clickable: true
    },
})
