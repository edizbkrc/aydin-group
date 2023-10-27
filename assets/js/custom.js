jQuery.event.special.touchstart = {
    setup: function (_, ns, handle) {
        this.addEventListener("touchstart", handle, {passive: true});
    }
};

window.addEventListener('load', (event) => {
    setTimeout(function () {
        document.body.classList.remove('preload');
    }, 300);
});

$(document).ready(function () {

    var mainSlider = new Swiper('section.mainSlider .swiper-container', {
        loop: true,
        effect: "fade",
        navigation: {
            nextEl: "section.mainSlider .navigation .next",
            prevEl: "section.mainSlider .navigation .prev",
        },
        autoplay: {
            delay: 60000,
            disableOnInteraction: false
        },
    });
    var productSlider = new Swiper('.productSlider .swiper-container', {
        loop: true, effect: "fade",
        navigation: {
            nextEl: ".productSlider .navigation .next",
            prevEl: ".productSlider .navigation .prev",
        },
        autoplay: {
            delay: 60000,
            disableOnInteraction: false
        },
    });
    var mainNews = new Swiper('section.mainNews .swiper-container', {
        loop: true,
        centeredSlides: true,
        slidesPerView: 2, spaceBetween: 20,
        autoplay: {
            delay: 60000,
            disableOnInteraction: false
        },
    });
    var owlMainProducts = $('.owlMainProducts');
    owlMainProducts.owlCarousel({
        margin: 112,
        nav: false,
        dots: false,

        loop: false,

        responsive: {
            0: {
                center: false,
                autoWidth: true,
            }, 576: {
                center: false,
                autoWidth: true,
            },
            768: {
                items: 3
            },
            992: {
                items: 4
            },


            1200: {
                items: 3
            },
            1600: {
                items: 3
            },
            2000: {
                items: 10
            },
        },
    });
    var owlMilestones = $('.owlMilestones');
    owlMilestones.owlCarousel({
        margin: 0,
        nav: false,
        dots: false,
        center: true,
        loop: true,

        responsive: {
            0: {
                center: false,
                autoWidth: true,
            }, 576: {
                center: false,
                autoWidth: true,
            },
            768: {
                items: 3
            },
            992: {
                items: 4
            },


            1200: {
                items: 3
            },
            1600: {
                items: 3
            },
        },
    });
    var owlProductPromotion = $('.owlProductPromotion');
    owlProductPromotion.owlCarousel({
        margin: 0,
        nav: false,
        dots: false,
        center: true,
        loop: true,

        responsive: {
            0: {
                items:1,
                center: false,
                autoWidth: false,
            }, 576: {
                center: false,
                autoWidth: false,
                items:2,
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            },
            1200: {
                items: 3
            },
            1600: {
                items: 3
            },
        },
    });
    var owlGallery = $('.owlGallery');
    owlGallery.owlCarousel({
        margin: 12,
        nav: true,
        dots: false,
        center: false,
        loop: true,
        navText: ['<svg class="icon"><use xlink:href="#arrow"></use></svg>', '<svg class="icon"><use xlink:href="#arrow"></use></svg>'],
        responsive: {
            0: {
                center: false,
                autoWidth: false,
                dots: false,
                nav: false,
                items: 2,
            },
            576: {
                center: false,
                autoWidth: false,
                items: 3,
                nav: false,
            },
            768: {
                items: 3,
                nav: false,
            },
            980: {
                items: 4,
                nav: true,
            },


            1200: {
                items: 5
            },
            1600: {
                items: 5
            },
        },
    });
    var owlProductMap = $('.owlProductMap');
    owlProductMap.owlCarousel({
        margin: 20,
        nav: true,
        dots: false,
        rtl: true,
        loop: true,
        autoWidth: true,
        responsive: {
            0: {
                center: false,
                autoWidth: true,
            }, 576: {
                center: false,
                autoWidth: true,
            },
            768: {
                autoWidth: true
            },
            992: {
                autoWidth: true
            },


            1200: {
                autoWidth: true
            },
            1600: {
                autoWidth: true
            },
        },
    });

    function owlFindtFirstActive() {
        owlProductMap.each(function () {
            $(this).find('.owl-item').removeClass('firstActive');
            $(this).find('.owl-item.active').each(function (index) {
                if (index === 0) {
                    $(this).addClass('firstActive')
                }
            })
        })
    }

    owlFindtFirstActive();
    owlProductMap.on('translated.owl.carousel', function (event) {
        owlFindtFirstActive()
    });
    if ($("a.galleryItem").length) {
        Fancybox.bind('a.galleryItem', {
            groupAll: true, Thumbs: false,


        });
    }

    if ($(".videoItem").length) {
        Fancybox.bind('.videoItem', {
            opacity: true,
        });
    }
    if ($(".select2").length) {
        $(".select2").select2();
    }
})

function initMap() {

    if ($(".contactMap").length) {
        $(".contactMap").each(function (index) {
            var mapID = "map" + index;
            $(this).find("#map").attr("id", mapID);
            var mapElement = $("#" + mapID);
            var lat = (mapElement.data("maplat"));
            var long = (mapElement.data("maplong"));
            var map = createMap(mapElement, lat, long);
            var mapCenter = {lat: parseFloat(lat), lng: parseFloat(long)};


            var marker = new google.maps.Marker({
                position: mapCenter,
                map: map,
                icon: "assets/img/svg/marker.svg"
            });
        });
    }
}

function createMap(mapSelector, mapLat, mapLong) {
    var mapCenter = {lat: parseFloat(mapLat), lng: parseFloat(mapLong)};

    var map = new google.maps.Map(mapSelector[0], {
        zoom: 13,
        disableDefaultUI: true,
        center: new google.maps.LatLng(mapCenter),
        styles: [{
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [{"color": "#e9e9e9"}, {"lightness": 17}]
        }, {
            "featureType": "landscape",
            "elementType": "geometry",
            "stylers": [{"color": "#f5f5f5"}, {"lightness": 20}]
        }, {
            "featureType": "road.highway",
            "elementType": "geometry.fill",
            "stylers": [{"color": "#ffffff"}, {"lightness": 17}]
        }, {
            "featureType": "road.highway",
            "elementType": "geometry.stroke",
            "stylers": [{"color": "#ffffff"}, {"lightness": 29}, {"weight": 0.2}]
        }, {
            "featureType": "road.arterial",
            "elementType": "geometry",
            "stylers": [{"color": "#ffffff"}, {"lightness": 18}]
        }, {
            "featureType": "road.local",
            "elementType": "geometry",
            "stylers": [{"color": "#ffffff"}, {"lightness": 16}]
        }, {
            "featureType": "poi",
            "elementType": "geometry",
            "stylers": [{"color": "#f5f5f5"}, {"lightness": 21}]
        }, {
            "featureType": "poi.park",
            "elementType": "geometry",
            "stylers": [{"color": "#dedede"}, {"lightness": 21}]
        }, {
            "elementType": "labels.text.stroke",
            "stylers": [{"visibility": "on"}, {"color": "#ffffff"}, {"lightness": 16}]
        }, {
            "elementType": "labels.text.fill",
            "stylers": [{"saturation": 36}, {"color": "#333333"}, {"lightness": 40}]
        }, {"elementType": "labels.icon", "stylers": [{"visibility": "off"}]}, {
            "featureType": "transit",
            "elementType": "geometry",
            "stylers": [{"color": "#f2f2f2"}, {"lightness": 19}]
        }, {
            "featureType": "administrative",
            "elementType": "geometry.fill",
            "stylers": [{"color": "#fefefe"}, {"lightness": 20}]
        }, {
            "featureType": "administrative",
            "elementType": "geometry.stroke",
            "stylers": [{"color": "#fefefe"}, {"lightness": 17}, {"weight": 1.2}]
        }]
    });

    return map;

}


$(document).keyup(function (e) {
    if (e.key === "Escape" && $('header.menuActive').length) {
        toggleHeaderMenu();
    }
    if (e.key === "Escape" && $('header.searchActive').length) {
        toggleHeaderSearch();
    }
});
$("body").on("click", ".customTabNavs a[href]", function (button) {
    var anchor = $(this).attr("href");
    var targetNavs = $(this).closest("[data-targetContent]");
    var targetContent = targetNavs.data("targetcontent");
    var navs = $(".customTabNavs[data-targetcontent=" + targetContent + "]");

    targetContent = $(".customTabContent[data-content=" + targetContent + "]");

    targetContent.find(">.tab.active").removeClass("active");
    navs.find("a.active").removeClass("active");
    targetContent.find(anchor).addClass("active");


    navs.find(" a[href='" + anchor + "']").addClass("active");
    return false;
});


$("body").on("click", ".accordionItem .accordionHeader", function () {

    var accordion = $(this).closest(".accordionItem");
    var body = accordion.find(".accordionBody");
    if (accordion.hasClass("active")) {
        body.css({"max-height": "0px"});

    } else {
        body.css({"max-height": (body[0].scrollHeight + 30) + "px"});

    }
    accordion.toggleClass("active");


});

function toggleHeaderSearch() {
    $("header").removeClass("menuActive");

    $("header").toggleClass("searchActive");
}

function toggleHeaderMenu() {
    $("header").removeClass("searchActive");
    $("header").toggleClass("menuActive");
}

$("body").on("click", "header .openSearchBtn ", function () {
    toggleHeaderSearch();

});
$("body").on("click", "header .openMenuBtn ", function () {
    toggleHeaderMenu();

});
$("body").on("click", "header .menu ul a", function () {
    var parent = $(this).closest("li");
    if (parent.find(".dropdown-menu").length) {
        parent.toggleClass("active");
        return false;
    }

});


$(document).ready(function () {

    var markersCoords = [
        {
            "name": "Türkiye",
            "text": "Hızlı kullanım için kolay vida/namlu çıkarma değişim (enjeksiyon üniteleri 11.300 ve üstü)",
            "img": "assets/img/mapinfoimg.png",
            "link": "#turkiye",
            "coords": [38.28606709248008, 34.571622610743496]
        },

        {
            "name": "marker3",
            "text": "Hızlı kullanım için kolay vida/namlu çıkarma değişim (enjeksiyon üniteleri 11.300 ve üstü)",
            "img": "assets/img/mapinfoimg.png",
            "link": "",
            "coords": [21.072753587237855, 16.168380994119527]
        },
        {
            "name": "marker4",
            "text": "Hızlı kullanım için kolay vida/namlu çıkarma değişim (enjeksiyon üniteleri 11.300 ve üstü)",
            "img": "assets/img/mapinfoimg.png",
            "link": "",
            "coords": [53.26458461641954, 8.788426625479705]
        },
        {
            "name": "marker5",
            "text": "Hızlı kullanım için kolay vida/namlu çıkarma değişim (enjeksiyon üniteleri 11.300 ve üstü)",
            "img": "assets/img/mapinfoimg.png",
            "link": "",
            "coords": [38.077152209518765, 114.91919897449128]
        },
        {
            "name": "marker6",
            "text": "Hızlı kullanım için kolay vida/namlu çıkarma değişim (enjeksiyon üniteleri 11.300 ve üstü)",
            "img": "assets/img/mapinfoimg.png",
            "link": "",
            "coords": [14.259866194408563, 100.86214303422483]
        },
        {
            "name": "marker7",
            "text": "Hızlı kullanım için kolay vida/namlu çıkarma değişim (enjeksiyon üniteleri 11.300 ve üstü)",
            "img": "assets/img/mapinfoimg.png",
            "link": "",
            "coords": [-23.848525678199177, 137.05906208041088]
        },
        {
            "name": "marker8",
            "text": "Hızlı kullanım için kolay vida/namlu çıkarma değişim (enjeksiyon üniteleri 11.300 ve üstü)",
            "img": "assets/img/mapinfoimg.png",
            "link": "",
            "coords": [37.16502248852677, -96.63949292651859]
        }
    ];
    var jvectorMap = $('#globalNetworkMap').vectorMap({
        map: 'world_mill_en', // Kullanılacak harita türü
        backgroundColor: 'transparent',
        zoomOnScroll: false,
        zoomButtons: false,
        hoverOpacity: 1,
        hoverColor: 'red',
        markers: markersCoords.map(function (h) {
            return {name: h.name, latLng: h.coords, text: h.text, img: h.img, link: h.link}
        }),
        series: {
            markers: [{
                attribute: 'image',
                scale: {
                    'icon': 'assets/img/svg/vectormapmarker.svg',
                },
                values: markersCoords.reduce(function (p, c, i) {
                    p[i] = 'icon';
                    return p
                }, {}),


            }]
        },
        regionStyle: {
            initial: {
                fill: '#0E3B85',

                stroke: '#FFF',
            },
            hover: {
                fill: '#D0A740',
                "fill-opacity": 1,
            },

        },
        onMarkerClick: function (event, index) {
            $(".mapInfoWindows").remove();
            var mapObj = $('#globalNetworkMap').vectorMap('get', 'mapObject');
            var marker = mapObj.markers[index].config;
            var style = mapObj.markers[index].element.shape.style.current;
            var markerX = style.cx;
            var markerY = style.cy;
            var infoWindow = $('<a>').addClass('mapInfoWindows')
                .html(' <div class="windowImage"> <img src="' + marker.img + '" alt="">  </div> <div' +
                    ' class="windowText">' + marker.text + '</div>');

            infoWindow.attr("href", marker.link);
            setTimeout(function () {
                $('#globalNetworkMap').append(infoWindow);

            }, 100);


            infoWindow.css({
                top: markerY,
                left: markerX,
            });
            infoWindow.click(function () {
                $(this).remove();
            });
        }
    });

    /*
        /// yukarıyı kapatıp burayı açarsanız tıklanan yerin konumunu log olarak yazdıracak.
        var map,
            markerIndex = 0,
            markersCoords = {};

        map = new jvm.Map({
            map: 'world_mill_en',
            backgroundColor: 'transparent',
            markerStyle: {
                initial: {
                    fill: 'red'
                }
            },
            regionStyle: {
                initial: {
                    fill: '#0E3B85',

                    stroke: '#FFF',
                },
                hover: {
                    fill: '#D0A740',
                    "fill-opacity": 1,
                },

            },
            container: $('#globalNetworkMap'),
            onMarkerTipShow: function (e, label, code) {
                map.tip.text(markersCoords[code].lat.toFixed(2) + ', ' + markersCoords[code].lng.toFixed(2));
            },
            onMarkerClick: function (e, code) {
                map.removeMarkers([code]);
                map.tip.hide();
            }
        });

        map.container.click(function (e) {
            var latLng = map.pointToLatLng(
                e.pageX - map.container.offset().left,
                e.pageY - map.container.offset().top
                ),
                targetCls = $(e.target).attr('class');

            if (latLng && (!targetCls || (targetCls && $(e.target).attr('class').indexOf('jvectormap-marker') === -1))) {
                markersCoords[markerIndex] = latLng;
                console.log(latLng);
                map.addMarker(markerIndex, {latLng: [latLng.lat, latLng.lng]});
                markerIndex += 1;
            }
        });*/

    var markersCoords2 = [
        {
            "name": "Türkiye",
            "id": "marker1",
            "latLng": [38.28606709248008, 34.571622610743496]
        },

        {
            "name": "marker2",
            "id": "marker2",
            "latLng": [21.072753587237855, 16.168380994119527]
        },
        {
            "name": "marker3",
            "id": "marker3",
            "latLng": [53.26458461641954, 8.788426625479705]
        },
        {
            "name": "marker4",
            "id": "marker4",
            "latLng": [38.077152209518765, 114.91919897449128]
        },
        {
            "name": "marker5",
            "id": "marker5",
            "latLng": [14.259866194408563, 100.86214303422483]
        },
        {
            "name": "marker6",
            "id": "marker6",
            "latLng": [-23.848525678199177, 137.05906208041088]
        },
        {
            "name": "marker7",
            "id": "marker7",
            "latLng": [37.16502248852677, -96.63949292651859]
        }
    ];
    var contactMap = $('#contactSVGMap').vectorMap({
        map: 'world_mill_en',
        backgroundColor: 'transparent',
        zoomOnScroll: false,
        zoomButtons: false,
        hoverOpacity: 1,
        hoverColor: 'red',
        markers: markersCoords2.map(function (h) {
            return h
        }),
        series: {
            markers: [{
                attribute: 'image',
                scale: {
                    'icon': 'assets/img/svg/vectormapmarker.svg',
                },
                values: markersCoords2.reduce(function (p, c, i) {
                    p[i] = 'icon';
                    return p
                }, {}),


            }]
        },
        regionStyle: {
            initial: {
                fill: '#0E3B85',

                stroke: '#FFF',
            },
            hover: {
                fill: '#D0A740',
                "fill-opacity": 1,
            },

        },
        onMarkerClick: function (event, index) {

            var mapObj = $('#contactSVGMap').vectorMap('get', 'mapObject');
            var marker = mapObj.markers[index].config;
            var style = mapObj.markers[index].element.shape.style.current;
            console.log(marker);
            alert("icerik değiştirilecek.");
        }
    });

})
$(document).click(function (event) {
    var $target = $(event.target);
    if (!$target.closest('.mapInfoWindows').length &&
        $('.mapInfoWindows').length) {
        $('.mapInfoWindows').remove();
    }
});


$(document).ready(function () {

    var markerData = [
        {
            left: 0.42093990114324215,
            top: 0.48187363450515297,
            link: "https://www.example.com/1",
            text: "Hızlı kullanım için kolay vida/namlu çıkarma değişim (enjeksiyon üniteleri 11.300 ve üstü)",
            photo: "assets/img/mapinfoimg.png"
        },
        {
            left: 0.5265235337209088,
            top: 0.6325489279708252,
            link: "https://www.example.com/2",
            text: "Hızlı kullanım için kolay vida/namlu çıkarma değişim (enjeksiyon üniteleri 11.300 ve üstü)",
            photo: "assets/img/mapinfoimg.png"
        },
        {
            left: 0.6353726394710805,
            top: 0.3197061576395566,
            link: "https://www.example.com/2",
            text: "Hızlı kullanım için kolay vida/namlu çıkarma değişim (enjeksiyon üniteleri 11.300 ve üstü)",
            photo: "assets/img/mapinfoimg.png"
        },
        {
            left: 0.8367434851088981,
            top: 0.29799870010636653,
            link: "https://www.example.com/2",
            text: "Hızlı kullanım için kolay vida/namlu çıkarma değişim (enjeksiyon üniteleri 11.300 ve üstü)",
            photo: "assets/img/mapinfoimg.png"
        },
        {
            left: 0.7104785224386989,
            top: 0.7615167639033074,
            link: "https://www.example.com/2",
            text: "Hızlı kullanım için kolay vida/namlu çıkarma değişim (enjeksiyon üniteleri 11.300 ve üstü)",
            photo: "assets/img/mapinfoimg.png"
        },
    ];

    var $photoContainer = $(".productMapArea .imgArea");
    $photoContainer.photoMarker(markerData);


    /*    /// burayı açarsanız tıkladığınız yerin pozisyonunu alırsınız.
        $photoContainer.on("click", function (e) {
            var x = (e.pageX - $photoContainer.offset().left) / $photoContainer.width();
            var y = (e.pageY - $photoContainer.offset().top) / $photoContainer.height();

            var randomMarkerInfo = {
                left: x,
                top: y,
            };
            console.log(randomMarkerInfo);
        });*/
});
