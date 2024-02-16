<?php include "inc.header.php"; ?>

<body class="preload headerJustBurgerMenu ">
    
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
                <a href="" class="links active">hakkımızda</a>
                <a href="" class="links">projeler</a>
                <a href="" class="links">duyuru & haberler</a>
            </div>
        </div>
    </section>

    <section class="videoArea">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="content">
                        <div class="title">Başarımızı bağlı olduğumuz
                            değerlerimize borçluyuz.</div>
                        <div class="description">
                            Aydın ailesi bireyleri çalışma hayatına ticari faaliyetlerle başlamış daha sonra tecrübe ve
                            enerjisini sanayi alanına kaydırmış, 40 yılın üzerinde bir süre üretim alanına başarılı
                            faaliyetler göstermiş, alanında Türkiye’nin önde gelen sanayi kuruluşları arasında yer
                            almıştır.

                            <br>
                            <br>

                            Sanayi alanında elde edilen tecrübe ve bilgi birikimleriyle, yatırımlarını farklı mecralara
                            kaydırma kararı alan Aydın ailesi bireyleri 2016 yılında Konya merkezli olarak Aydın Yatırım
                            Grup’u kurmuştur.

                            <br>
                            <br>


                            Aydın Yatırım Grup; Yatırım faaliyetlerini ağırlıklı olarak ticaret, inşaat alanında
                            yürütmektedir.

                            <br>
                            <br>

                            Şirket inovatif düşünen genç yönetim kadrosu, alanında lider partnerleri ve tecrübeli
                            ekibiyle başta ticaret, madencilik, inşaat alanı olmak üzere sektör ve ürünlerde farklılık
                            oluşturarak gerek yurt içi gerek yurt dışında profesyonel iş birlikleri ile önümüzdeki 10
                            yıl içerisinde Türkiye’nin önde gelen yatırım şirketleri arasına girmeyi hedeflemektedir.
                        </div>
                        <buttom type="button" class="btnNext">devamı</buttom>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <a href="https://www.youtube.com/watch?v=2CTvgZ0-z40" class="videoCard">
                        <div class="coverImage">
                            <img src="assets/img/video.png" alt="">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="homesSlides">
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