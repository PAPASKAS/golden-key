import Swiper, { Navigation, Pagination } from 'swiper';
import Noty from 'noty';
import Axios from 'axios';

function noty (text, type) {
    new Noty({
        text,
        type,
        theme: 'nest',
    }).show();
}

new Swiper('.serviceSwiper', {
    direction: 'horizontal',
    spaceBetween: 30,
    modules: [Navigation, Pagination],
    pagination: {
        el: '.swiper-pagination',
        type: 'progressbar',
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
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

// For all .common-form event submit
document.querySelectorAll('.common-form').forEach((form) => {
    form.addEventListener('submit', (event) => {
        event.preventDefault();

        Axios({
            data: new FormData(event.target),
            withCredentials: true,
            method: event.target.method,
            url: event.target.action,
            headers: {
                'Content-Type': 'application/json;charset=utf-8',
            },
        })
            .then((res) => res.data)
            .then(() => {
                noty('Успешно!', 'success');
            })
            .catch((err) => {
                // For dev debug
                console.log(err.response);

                if(err.response.status >= 500 || err.response.status === 419)
                    noty('Непредвиденная ошибка сервера!', 'error');

                const errArr = Object.values(err.response.data.errors);

                errArr.forEach((error) => {
                    noty(error, 'error');
                });
            });
    });
});
