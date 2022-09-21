let searchBtn = document.querySelector('#search-btn');
let searchBox = document.querySelector('.search-box');
let accountForm = document.querySelector('.account-form');
let navBar = document.querySelector('.navbar');
let barsBtn = document.querySelector('#bars-btn');
let barsColse = document.querySelector('#bars-colse');
let loginBtn = document.querySelector('.account-form .login-btn');
let registerBnt = document.querySelector('.account-form  .register-btn');

searchBtn.addEventListener('click', () => {
    searchBtn.classList.toggle('fa-times');
    searchBox.classList.toggle('active');
    navBar.classList.remove('active');
    accountForm.classList.remove('active');


});

document.querySelector('#user-btn').onclick = () => {
    accountForm.classList.add('active');
    searchBox.classList.remove('active');
    navBar.classList.remove('active');
};

document.querySelector('#colse-form').onclick = () => {
    accountForm.classList.remove('active');
};


document.querySelector('#bars-btn').onclick = () =>{
    navBar.classList.add('active');
    searchBox.classList.remove('active');
    accountForm.classList.remove('active');
};

document.querySelector('#bars-colse').onclick = () =>{
    navBar.classList.remove('active');
};


registerBnt.onclick = () => {
    registerBnt.classList.add('active');
    loginBtn.classList.remove('active');
    document.querySelector('.account-form  .register-form').classList.add('active');
    document.querySelector('.account-form .login-form ').classList.remove('active');

};

loginBtn.onclick = () => {
    loginBtn.classList.add('active');
    registerBnt.classList.remove('active');
    document.querySelector('.account-form .login-form ').classList.add('active');
    document.querySelector('.account-form  .register-form').classList.remove('active');
};


var swiper = new Swiper(".home-slider ", {
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    loop: true,
    grabCursor: true,
    autoplay: {
        delay: 2500,
        desibleInteraction: true,
    },
});



var swiper = new Swiper(".home-courses-slider", {
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    loop: true,
    grabCursor: true,
    spaceBetween: 20,
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        991: {
            slidesPerView: 3,
        },
    },
});


var swiper = new Swiper(".teacher-slider", {
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    loop: true,
    grabCursor: true,
    spaceBetween: 20,
    autoplay: {
        dealy: 1500,
        desibleInteraction: true,
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        991: {
            slidesPerView: 3,
        },
    },
});

var swiper = new Swiper(".review-swiper", {
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    loop: true,
    grabCursor: true,
    spaceBetween: 20,
    breakpoints: {
        0: {
            slidesPerView: 1,

        },
        768: {
            slidesPerView: 2,

        },

        991: {
            slidesPerView: 3,
        },
    },
});


var swiper = new Swiper(".logo-slider", {
    autoplay: {
        delay: 2500,
        desibleInteraction: true,
    },
    loop: true,
    grabCursor: true,
    spaceBetween: 20,
    breakpoints: {
        0: {
            slidesPerView: 1,

        },
        450:{
            slidesPerView:2,
        },

        768: {
            slidesPerView: 3,

        },
        991: {
            slidesPerView: 4,
        },

        1200:{
            slidesPerView: 5,
        },
    },
});





    let accordion = document.querySelectorAll('.faq .accordion-container .accordion');

accordion.forEach(acco => {
    acco.onclick = () => {
        accordion.forEach(dion => dion.classList.remove('active'));
        acco.classList.toggle('active');
    };
});

document.querySelector('.load-more .btn').onclick = () => {
    document.querySelectorAll('.courses .box-container .hide').forEach(show => {
        show.style.display = 'block';
    });
    document.querySelector('.load-more .btn').style.display = 'none';
};
