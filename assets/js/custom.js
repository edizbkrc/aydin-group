$(document).ready(function () {
    $("body").on("click", ".sidebarToggle", function (button) {
        $("header").toggleClass("sideactive");
    });

});

var swiper = new Swiper(".mySwiper", {
    spaceBetween: 5,
    slidesPerView: 8,
    
});
var swiper2 = new Swiper(".mySwiper2", {
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