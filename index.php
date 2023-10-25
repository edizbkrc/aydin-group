<?php include "inc.header.php"; ?>
<body class="preload">
<section class="mainSlider">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php for ($i = 0; $i <= 4; $i++) { ?>
                <div class="swiper-slide">
                    <div class="side">
                        <div class="text">
                            <b>
                                ZERES III SERIES
                            </b>
                            <span>
                                Esnek ve Verimli
                            </span>
                        </div>
                    </div>
                    <div class="wrapper">
                        <div class="content">
                            <div class="text">
                                <b>
                                    HASSAS
                                    <i class="plus">+</i>
                                </b>
                                <span>
                                    AKILLI
                                    <i class="plus">+</i>
                                </span>
                                <small>
                                    İNTERAKTİF
                                    <i class="plus">+</i>
                                </small>
                            </div>
                            <div class="description">
                                Özel yapım elektrikli servo sürücü sistemleri, yeni bir invertör nesliyle birlikte,
                                yüksek hassasiyet ve dinamiklerle yüksek performans ve benzersiz bir fiyat/performans
                                oranı sağlar. <?= $i ?>
                            </div>
                            <a href="" class="view">
                                Ürünü Detaylı İncele
                                <svg class="icon">
                                    <use xlink:href="#arrow"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="productImage">
                            <img src="assets/img/sliderimg.png" alt="">
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="navigation">
            <div class="next navBtn">
                <svg class="icon">
                    <use xlink:href="#chevron"></use>
                </svg>
            </div>
            <div class="seperator"></div>
            <div class="prev navBtn">
                <svg class="icon">
                    <use xlink:href="#chevron"></use>
                </svg>
            </div>
        </div>
    </div>
</section>
<section class="mainProducts">
    <div class="content">
        <div class="title">
            Plastik <br>
            Dünyamız <br>
            <b> HAİTİ TÜRKİYE’YE</b>
            HOŞ GELDİNİZ
        </div>
        <div class="description">
            1966 yılında Ningbo, Çin'de kurulan Haitian Group, endüstriyel imalat alanında önde gelen Kurumsal
            Gruplardan biri haline geldi.
            <br>
            <br>
            <b> Üretim Dünyamıza hoş geldiniz.</b>
        </div>
    </div>
    <div class="owl-carousel owlMainProducts">
        <?php for ($i = 0; $i <= 7; $i++) { ?>
            <div class="item">
                <div class="productItem1">
                    <svg class="haitian">
                        <use xlink:href="#ht"></use>
                    </svg>
                    <a href="" class="downloadDocument">
                        <svg class="icon">
                            <use xlink:href="#pdf"></use>
                        </svg>
                        Döküman İndir
                    </a>
                    <a href="" class="productImage">
                        <img src="assets/img/product.png" alt="">
                    </a>
                    <a href="" class="productName">
                        Haiti Plastik Makineleri
                    </a>
                    <a href="" class="goProduct">
                        <svg class="icon">
                            <use xlink:href="#arrow"></use>
                        </svg>
                    </a>


                </div>
            </div>
        <?php } ?>
    </div>
</section>
<section class="mainGlobalNetwork">

    <div class="titleArea">
        <div class="title">
            Küresel Ağımız
        </div>
        <div class="description">
            Montaj ve lojistik için 9 lokasyon dahil olmak üzere yaklaşık 60 satış ve servis ortağı ile Haitian
            International, tüm büyük dünya pazarlarında varlığını sürdürmektedir.
        </div>
    </div>
    <div class="areaList">
        <div class="area">
            Türkiye
        </div>
        <div class="area">
            Çin
        </div>
        <div class="area">
            Asya
        </div>
        <div class="area">
            Amerika
        </div>
        <div class="area">
            Avrupa
        </div>
        <div class="area">
            Afrika
        </div>
        <div class="area">
            Avustralya
        </div>
    </div>
    <div id="globalNetworkMap"></div>
</section>
<section class="mainProductMap">
    <div class="wrapper">
        <div class="titleArea">
            <div class="title">

                Teknolojiye
                Odaklanıyoruz.
            </div>
            <svg class="icon">
                <use xlink:href="#ht"></use>
            </svg>
            <div class="description">
                Daha hızlı, daha yüksek, daha uzak - daha değişken, daha elverişli, daha iyi: Zamanın talepleri her
                zamankinden daha büyük bir hızla değişiyor. Plastik işleme endüstrileri için de esneklik, yarının en
                önemli anahtar faktörlerinden biridir
            </div>
        </div>
        <div class="owl-carousel owlProductMap">
            <div class="item">
                <div class="productMapCard">
                    Çift silindirli dengeli enjeksiyon sistemi
                </div>
            </div>
            <div class="item">
                <div class="productMapCard">
                    Döner enjeksiyon ünitesi
                </div>
            </div>
            <div class="item">
                <div class="productMapCard">
                    Nozul merkezleme hizala ma cihazı
                </div>
            </div>
            <div class="item">
                <div class="productMapCard">
                    Yüksek torklu hidrolik motor için
                    dozajlama
                </div>
            </div>
            <div class="item">
                <div class="productMapCard">
                    Döner enjeksiyon ünitesi
                </div>
            </div>
            <div class="item">
                <div class="productMapCard">
                    Nozul merkezleme hizala ma cihazı
                </div>
            </div>
            <div class="item">
                <div class="productMapCard">
                    Yüksek torklu hidrolik motor için
                    dozajlama
                </div>
            </div>
        </div>
    </div>
    <div class="productMapArea">

        <div class="imgArea">
            <img src="assets/img/productmap.png" alt="">
        </div>
    </div>
</section>
<section class="mainPromotionArea">
    <div class="backgroundImage">
        <img src="assets/img/promotionbg.png" alt="">
    </div>
    <div class="experienceArea">
        <div class="experience50">
            <img src="assets/img/svg/experience50.svg" alt="">
            <div class="text">
             <span>
                 YEARS OF <br>
                EXPERIENCE
             </span>
                <b>YILLIK <br>
                    TECRÜBE</b>
            </div>
        </div>
        <div class="description">
            Girişimci ruh, maliyet bilinci, yatırım yapma isteği ve çalışanlara, ortaklara ve müşterilere tam saygı,
            Haitian Group kurumsal kültürünün temel taşlarıdır. Çünkü yüksek kaliteli ve uluslararası düzeyde rekabetçi
            ürünler, motive olmuş çalışanların zihinlerinde ve ellerinde yaratılır.
        </div>
        <a href="" class="meetHaitian">
            <span class="iconArea">
                <svg class="icon"><use xlink:href="#arrow"></use></svg>
            </span>
            Haiti Yakından Tanı!
        </a>
        <a href="" class="trailer">
            <svg class="icon">
                <use xlink:href="#playcircle"></use>
            </svg>
            Tanıtım Filmini İzle
        </a>
        <img src="assets/img/grnf1.png" alt="" class="photo">
    </div>

</section>
<section class="haitianBrands">
    <a href="" class="logo">
        <img src="assets/img/svg/brands1.svg" alt="">
    </a>
    <a href="" class="logo">
        <img src="assets/img/svg/brands2.svg" alt="">
    </a>

    <a href="" class="logo">
        <img src="assets/img/svg/brands3.svg" alt="">
    </a>

    <a href="" class="logo">
        <img src="assets/img/svg/brands4.svg" alt="">
    </a>

    <a href="" class="logo">
        <img src="assets/img/svg/brands5.svg" alt="">
    </a>

</section>

<section class="mainFounder">
    <div class="founder">
        <div class="description">
            Girişimci ruh, maliyet bilinci, yatırım yapma isteği ve çalışanlara, ortaklara ve müşterilere tam saygı,
            kurumsal kültürümüzün temel taşlarıdır. Çünkü yüksek kaliteli ve uluslararası düzeyde rekabetçi ürünler,
            motive olmuş çalışanların zihinlerinde ve ellerinde yaratılır.
        </div>
        <img src="assets/img/svg/founder.svg" alt="" class="founderSignature">
        <div class="text">
            1966’da, Ningbo'da <br>
            Haitian şirketini kurdu.
        </div>
        <img src="assets/img/mrzhang.png" alt="" class="mrzhang">
    </div>

    <div class="milestones">
        <img src="assets/img/svg/milestones.svg" alt="" class="milestonesImg">
        <div class="milestonesText">
            GÜÇ. PERFORMANS. TUTARLILIK.
        </div>


        <div class="owl-carousel owlMilestones">
            <div class="item">
                <div class="mileStoneItem">
                    <div class="imgArea">
                        <img src="assets/img/milestone1.png" alt="">
                        <div class="year">
                            1966
                        </div>
                    </div>
                    <div class="text">
                        JIANGNAN TARIM MAKİNELERİ FABRİKASI KURULDU (HAITİAN GRUBUNUN SELEFİ)
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="mileStoneItem">
                    <div class="imgArea">
                        <img src="assets/img/milestone2.png" alt="">
                        <div class="year">
                            1973
                        </div>
                    </div>
                    <div class="text">
                        JIANGNAN TARIM MAKİNELERİ FABRİKASI KURULDU (HAITİAN GRUBUNUN SELEFİ)
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="mileStoneItem">
                    <div class="imgArea">
                        <img src="assets/img/milestone3.png" alt="">
                        <div class="year">
                            1980
                        </div>
                    </div>
                    <div class="text">
                        JIANGNAN TARIM MAKİNELERİ FABRİKASI KURULDU (HAITİAN GRUBUNUN SELEFİ)
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="mileStoneItem">
                    <div class="imgArea">
                        <img src="assets/img/milestone3.png" alt="">
                        <div class="year">
                            2022
                        </div>
                    </div>
                    <div class="text">
                        JIANGNAN TARIM MAKİNELERİ FABRİKASI KURULDU (HAITİAN GRUBUNUN SELEFİ)
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>

<section class="mainNews">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php for ($i = 0;
                       $i <= 4;
                       $i++) { ?>
                <div class="swiper-slide">
                    <div class="newsItem1">
                        <div class="imgArea">
                            <img src="assets/img/news1.png" alt="">
                        </div>
                        <div class="newsContent">
                            <svg class="quote">
                                <use xlink:href="#quote"></use>
                            </svg>
                            <div class="date">
                                21.08.2022
                            </div>
                            <div class="title">
                                Çin'in Meksika Büyükelçisi Haiti Meksikasi'ni Ziyaret Etti.
                            </div>
                            <div class="description">
                                Çin'in Meksika Büyükelçisi Zhang Run ve ekibi yerel saatle 16 Ağustos'ta Haitian
                                Mexico'yu ziyaret etti. Haitian Mexico Genel Müdürü Xu Biyun da resepsiyona katıldı ve
                                ziyarete eşlik etti.
                            </div>
                            <a href="" class="goNews">
<span class="iconArea">
    <svg class="icon"><use xlink:href="#arrow"></use></svg>
</span>
                                Haber Detaylarını Gör
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php include "inc.footer.php"; ?>


