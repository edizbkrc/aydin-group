<?php include "inc.header.php"; ?>

<body class="preload">

    <section class="mainSlider">
        <div class="container-fluid">
            <div class="sliderTop">
                <h2>Nish Meram</h2>
                <div class="sliderLinks">
                    <a href="">Dış Mekan</a>
                    <a href="">İç Mekan</a>
                    <a href="">Kat Planı</a>
                    <a href="">Vaziyet Planı</a>
                    <a href="">Katalog</a>
                    <a href="">Video</a>
                </div>
            </div>
            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                <div class="swiper-wrapper">
                    <?php for ($i = 0; $i < 38; $i++) { ?>
                        <div class="swiper-slide">
                            <img src="assets/img/mainsliderimg1.png" />
                        </div>
                    <?php } ?>
                </div>

            </div>

            <div class="swiperthumbArea">
                <div thumbsSlider="" class="swiper mySwiper customSwiper">
                    <div class="swiper-wrapper">
                        <?php for ($i = 0; $i < 38; $i++) { ?>
                            <div class="swiper-slide custom-swiper-slide">
                                <img src="assets/img/mainsliderimg1.png" />
                            </div>
                        <?php } ?>
                    </div>

                </div>
                <div class="swiper-pagination"></div>

                <div class="swiper-button-prev custom-swiper-prev"></div>
                <div class="swiper-button-next custom-swiper-next"></div>
            </div>
        </div>
    </section>


    <?php include "inc.footer.php"; ?>