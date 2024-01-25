<?php include "inc.header.php"; ?>

<body class="preload headerJustBurgerMenu">
    <section class="mainHead">
        <div class="container-fluid">
            <div class="headBg">
                <img src="assets/img/headerbg" alt="">
            </div>
            <div class="headerSpiral">
                <img src="assets//img/headerbgspiral.png" alt="">
            </div>
            <div class="title">Ev tanımını değiştirdik,<br>
                size ev değil, içerisinde nice hikayeler yazacağınız yaşam alanları inşa ediyoruz.</div>


            <div class="otherLinks">
                <a class="links active">hakkımızda</a>
                <a class="links">projeler</a>
                <a class="links">duyuru & haberler</a>
            </div>
        </div>
    </section>

    <section class="homesSlides">
        <div class="container-fluid">
            <div class="sliderTop">
                <h2>Projeler</h2>
                <div class="sliderLinks">
                    <a href="">Tümü</a>
                    <a href="">Devam Eden</a>
                    <a href="">Tamamlanmış</a>
                </div>
            </div>
            <div class="swiper mySwiper swiperHomes">
                <div class="swiper-wrapper">
                    <?php for ($i = 0; $i < 38; $i++) { ?>
                        <div class="swiper-slide swiper-slide-grey">
                            <a href="">
                                <img src="assets/img/homesslide1.png" />
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
    </section>



    <?php include "inc.footer.php"; ?>