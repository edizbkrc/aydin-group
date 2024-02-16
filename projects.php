<?php include "inc.header.php"; ?>

<body class="preload headerJustBurgerMenu greyBg">
    <section class="mainHead">
        <div class="container-fluid">
            <div class="headBg">
                <img src="assets/img/headerbg" alt="">
            </div>
            <div class="headerSpiral">
                <img src="assets//img/headerbgspiral.png" alt="">
            </div>
        </div>
    </section>



    <section class="homesSlides projects">
        <div class="container-fluid">
            <div class="sliderTop">
                <h2>Projeler</h2>
                <ul class="customTabNavs sliderLinks" data-targetcontent="projects">
                    <li><a href="#tab1" class="active"> Tümü </a></li>
                    <li><a href="#tab2" class=""> Devam Eden </a></li>
                    <li><a href="#tab3" class=""> Tamamlanmış </a></li>
                </ul>
            </div>
            <div class="customTabContent" data-content="projects">
                <div class="tab active" id="tab1">
                    <div class="swiper mySwiper swiperHomes">
                        <div class="swiper-wrapper">
                            <?php for ($i = 0; $i < 4; $i++) { ?>
                                <div class="swiper-slide swiper-slide-grey">
                                    <a href="" class="grey-slide-img">
                                        <img src="assets/img/homesslide1.png" />
                                    </a>
                                    <div class="content">
                                        <b> Koru Inventum</b>
                                        Devam Eden Proje
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-grey">
                                    <a href="" class="grey-slide-img">
                                        <img src="assets/img/homesslide2.png" />
                                    </a>
                                    <div class="content">
                                        <b> Koru Inventum</b>
                                        Devam Eden Proje
                                    </div>
                                </div>

                                <div class="swiper-slide swiper-slide-grey">
                                    <a href="" class="grey-slide-img">
                                        <img src="assets/img/homesslide3.png" />
                                    </a>
                                    <div class="content">
                                        <b> Koru Inventum</b>
                                        Devam Eden Proje
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-grey">
                                    <a href="" class="grey-slide-img">
                                        <img src="assets/img/homesslide4.png" />
                                    </a>
                                    <div class="content">
                                        <b> Koru Inventum</b>
                                        Devam Eden Proje
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="swiperNavs">
                            <div class="swiper-button-prev custom-swiper-prev-2"></div>
                            <div class="swiper-button-next custom-swiper-next-2"></div>

                        </div>
                    </div>
                </div>
                <div class="tab" id="tab2">
                    <div class="swiper mySwiper swiperHomes">
                        <div class="swiper-wrapper">
                            <?php for ($i = 0; $i < 4; $i++) { ?>
                                <div class="swiper-slide swiper-slide-grey">
                                    <a href="" class="grey-slide-img">
                                        <img src="assets/img/homesslide3.png" />
                                    </a>
                                    <div class="content">
                                        <b> Koru Inventum</b>
                                        Devam Eden Proje
                                    </div>
                                </div>

                                <div class="swiper-slide swiper-slide-grey">
                                    <a href="" class="grey-slide-img">
                                        <img src="assets/img/homesslide2.png" />
                                    </a>
                                    <div class="content">
                                        <b> Koru Inventum</b>
                                        Devam Eden Proje
                                    </div>
                                </div>

                                <div class="swiper-slide swiper-slide-grey">
                                    <a href="" class="grey-slide-img">
                                        <img src="assets/img/homesslide1.png" />
                                    </a>
                                    <div class="content">
                                        <b> Koru Inventum</b>
                                        Devam Eden Proje
                                    </div>
                                </div>

                                <div class="swiper-slide swiper-slide-grey">
                                    <a href="" class="grey-slide-img">
                                        <img src="assets/img/homesslide4.png" />
                                    </a>
                                    <div class="content">
                                        <b> Koru Inventum</b>
                                        Devam Eden Proje
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="swiperNavs">
                            <div class="swiper-button-prev custom-swiper-prev-2"></div>
                            <div class="swiper-button-next custom-swiper-next-2"></div>

                        </div>
                    </div>
                </div>
                <div class="tab" id="tab3">
                    <div class="swiper mySwiper swiperHomes">
                        <div class="swiper-wrapper">
                            <?php for ($i = 0; $i < 4; $i++) { ?>

                                <div class="swiper-slide swiper-slide-grey">
                                    <a href="" class="grey-slide-img">
                                        <img src="assets/img/homesslide2.png" />
                                    </a>
                                    <div class="content">
                                        <b> Koru Inventum</b>
                                        Devam Eden Proje
                                    </div>
                                </div>

                                <div class="swiper-slide swiper-slide-grey">
                                    <a href="" class="grey-slide-img">
                                        <img src="assets/img/homesslide1.png" />
                                    </a>
                                    <div class="content">
                                        <b> Koru Inventum</b>
                                        Devam Eden Proje
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-grey">
                                    <a href="" class="grey-slide-img">
                                        <img src="assets/img/homesslide3.png" />
                                    </a>
                                    <div class="content">
                                        <b> Koru Inventum</b>
                                        Devam Eden Proje
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-grey">
                                    <a href="" class="grey-slide-img">
                                        <img src="assets/img/homesslide4.png" />
                                    </a>
                                    <div class="content">
                                        <b> Koru Inventum</b>
                                        Devam Eden Proje
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="swiperNavs">
                            <div class="swiper-button-prev custom-swiper-prev-2"></div>
                            <div class="swiper-button-next custom-swiper-next-2"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <?php include "inc.footer.php"; ?>