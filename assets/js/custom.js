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

$("body").on("click", ".links", function (button) {
    $(".links").removeClass("active");
    $(this).addClass("active");
});


var swiper = new Swiper(".swiperHomes", {
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",

    },
    spaceBetween: 8,
    slidesPerView: 4,
    loop: true,
});


$(document).ready(function () {
    if ($(".videoCard").length) {
        Fancybox.bind('.videoCard', {});
    }
    if ($(".videoLink").length) {
        Fancybox.bind('.videoLink', {});
    }
    if ($(".pageProductDetail").length) {
        Fancybox.bind('.productImages .imgArea', {});
    }
    if ($(".owl-projectReports").length) {
        Fancybox.bind('.owl-projectReports .imgArea', {});
    }
    if ($(".gallery").length) {
        Fancybox.bind('.gallery .imgArea', {});
    }


});