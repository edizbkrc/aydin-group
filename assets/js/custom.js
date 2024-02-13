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
    breakpoints: {
        '0': {
            slidesPerView: 2,
        },
        '480': {
            slidesPerView: 3,

        },
        '658': {
            slidesPerView: 4,
        },
        '1024': {
            slidesPerView: 7,
        },
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
    breakpoints: {
        '0': {
            slidesPerView: 1,

        },
        '480': {
            slidesPerView: 2,

        },
        '658': {
            slidesPerView: 3,
        },
        '1024': {
            slidesPerView: 4,
        },
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


$("body").on("click", ".customTabNavs a[href]", function (button) {
    var anchor = $(this).attr("href");
    var targetNavs = $(this).closest("[data-targetContent]");
    var targetContent = targetNavs.data("targetcontent");
    var navs = $(".customTabNavs[data-targetcontent=" + targetContent + "]");
    targetContent = $(".customTabContent[data-content=" + targetContent + "]");
    if (targetContent.find(anchor).length) {
        targetContent.find(">.tab.active").removeClass("active");
        navs.find("a.active").removeClass("active");
        targetContent.find(anchor).addClass("active");
        navs.find(" a[href='" + anchor + "']").addClass("active");
        return false;
    }
});