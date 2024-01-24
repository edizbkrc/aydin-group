$(document).ready(function () {
    $("body").on("click", ".sidebarToggle", function (button) {
        $("header").toggleClass("sideactive");
    });

});

var swiper = new Swiper(".swiperTabs", {
    spaceBetween: 5,
    slidesPerView: 8,

});
var swiper2 = new Swiper(".swiperMain", {
    spaceBetween: 10,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
        type: "fraction",
    },
    thumbs: {
        swiper: swiper,
    },
});


var swiper = new Swiper(".swiperContracts", {
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",

    },
    spaceBetween: 20,
    slidesPerView: 7,
    loop: true,
});