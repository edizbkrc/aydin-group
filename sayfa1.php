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
            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                class="swiper mySwiper2 swiperMain">
                <div class="swiper-wrapper">
                    <?php for ($i = 0; $i < 38; $i++) { ?>
                        <div class="swiper-slide custom">
                            <img src="assets/img/mainsliderimg1.png" />
                        </div>
                    <?php } ?>
                </div>

            </div>

            <div class="swiperthumbArea">
                <div thumbsSlider="" class="swiper mySwiper swiperTabs customSwiper">
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

    <section class="mainDescription">
        <div class="container-fluid">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque suscipit diam ac enim dignissim, vitae
            posuere
            eros aliquam. Sed at dui quis est maximus lobortis a id risus. Curabitur vel ligula quis orci ornare commodo
            in
            at ligula. Sed quis scelerisque magna, quis commodo erat. Nam et laoreet sapien, id vulputate justo. Sed
            ullamcorper, neque in gravida placerat, risus metus ultrices leo, at placerat tortor odio rutrum sem. Nullam
            gravida nisl nec convallis dignissim. Vestibulum aliquam, tellus at efficitur dignissim, dui odio pulvinar
            ligula, sed blandit velit quam ut diam. Proin tempus dapibus blandit. Vestibulum consectetur cursus sem ut
            laoreet. Quisque ullamcorper aliquet nisi, ac tempus velit laoreet in. Sed sed magna risus. Nullam congue
            porta
            lorem eget hendrerit.
            <br>
            <br>
            Quisque varius est a risus ornare laoreet. In lectus diam, laoreet ac ornare et, egestas a ligula. Praesent
            mattis felis magna, sit amet sagittis quam posuere vitae. Maecenas a ex a est interdum vulputate. Maecenas
            ac
            pretium massa, hendrerit lacinia risus. Curabitur vitae pulvinar nunc. Nunc sit amet mi id mi congue
            pulvinar.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus lectus magna. Cras porta lectus leo,
            lacinia mollis tortor porttitor scelerisque. Maecenas sit amet nibh dui. Donec eros felis, vehicula non est
            nec,
            tempor laoreet ante. Pellentesque euismod fermentum odio, vel ornare ligula mattis in. Maecenas volutpat
            tellus
            sed quam placerat, nec sodales enim vestibulum. Praesent elementum mollis consequat. Nam dapibus placerat
            interdum.

        </div>
    </section>

    <section class="mainProductDetailCards">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="productCard1">
                        <div class="title">Proje Detayları</div>
                        <div class="content">42 Adet : 5+1 Daire
                            <span> (3 araçlık kapalı otopark)</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="productCard1">
                        <div class="content">
                            42 Adet : 4+1 Daire
                            <span>(2 araçlık kapalı otopark)</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="productCard1">
                        <div class="content">
                            12 Adet : 3+1 Daire
                            <span>(1 araçlık kapalı otopark)</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-grid10-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="productCard2">
                        <svg class="icon">
                            <use xlink:href="assets/img/svg/iconset.svg#location"></use>
                        </svg>
                        <div class="content">
                            <div class="subTitle">Bölge:</div>
                            <div class="subContent">Konya / Meram</div>
                        </div>
                    </div>
                </div>
                <div class="col-grid10-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="productCard2">
                        <svg class="icon">
                            <use xlink:href="assets/img/svg/iconset.svg#time"></use>
                        </svg>
                        <div class="doubleContent">
                            <div class="content">
                                <div class="subTitle">Başlangıç</div>
                                <div class="subContent">2022 / 3</div>
                            </div>
                            <div class="content">
                                <div class="subTitle">Bitiş</div>
                                <div class="subContent">2022 / 4</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-grid10-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="productCard2">
                        <svg class="icon">
                            <use xlink:href="assets/img/svg/iconset.svg#home"></use>
                        </svg>
                        <div class="content">
                            <div class="subTitle">Konut Sayısı</div>
                            <div class="subContent">96</div>
                        </div>
                    </div>
                </div>
                <div class="col-grid10-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="productCard2">
                        <svg class="icon">
                            <use xlink:href="assets/img/svg/iconset.svg#basket"></use>
                        </svg>
                        <div class="content">
                            <div class="subTitle">Ticari Üniteler</div>
                            <div class="subContent">1.500 m²</div>
                        </div>
                    </div>
                </div>
                <div class="col-grid10-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="productCard2">
                        <svg class="icon">
                            <use xlink:href="assets/img/svg/iconset.svg#flag"></use>
                        </svg>
                        <div class="doubleContent">
                            <div class="content">
                                <div class="subTitle">İnşaat Alanı</div>
                                <div class="subContent">32.000 m²</div>
                            </div>
                            <div class="content">
                                <div class="subTitle">Arsa Alanı</div>
                                <div class="subContent">11.600 m²</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="projectReports">
        <div class="container-fluid">
            <div class="projectArea">
                <h2 class="title">Proje Raporları</h2>

                <div class="row colZero">
                    <div class="col-lg-4 col-xl-3 col-sm-6 colZero">
                        <div class="projectReportCards1">
                            <div class="content">
                                <b>Beton Sınıfı</b><br>
                                FORE KAZIK: C25 <br>
                                BETONARME BETONU: C35"
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3 col-sm-6 colZero">
                        <div class="projectReportCards1">
                            <div class="content">
                                <b>Çelik Sınıfı</b><br>
                                "NERVÜRLÜ B420 C<br>
                                NOT: Deprem yönetmeliğinin<br>
                                koşullarını sağlayan en uygun çelik)"
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3 col-sm-6 colZero">
                        <div class="projectReportCards1">
                            <div class="content">
                                <b>Yerel Zemin Sınıfı</b><br>
                                Yerel Zemin Sınıfı<br>
                                Yerel Zemin Sınıfı =ZC

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3 col-sm-6 colZero">
                        <div class="projectReportCards1">
                            <div class="content">
                                <b>Deprem Tasarım Sınıfı</b><br>
                                DTS =3 (Kaynak""AFAD,2018.<br>
                                Türkiye Deprem Tehlike Haritası"")
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row colZero">
                    <div class="col-lg-4 col-sm-6 colZero">
                        <div class="projectReportCards1 projectCardBorderBottom">
                            <div class="content">
                                <b> Bina Kullanım Sınıfı / <br>
                                    Bina önem Katsayısı</b><br>
                                BKS=3 / I_1

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 colZero">
                        <div class="projectReportCards1 projectCardBorderBottom">
                            <div class="content">
                                <b>Temel Tipi</b><br>
                                Radye Temel
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 colZero">
                        <div class="projectReportCards1 projectCardBorderBottom">
                            <div class="content">
                                <b>Kalıp Tipi</b><br>
                                Tünel kalıp /<br>
                                Konvansiyonel kalıp

                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper mySwiper swiperContracts">
                    <div class="swiper-wrapper">
                        <?php for ($i = 0; $i < 38; $i++) { ?>
                            <div class="swiper-slide">
                                <a href="" class="contactsSlideItem">
                                    <img src="assets/img/contract.png" />
                                </a>
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
    </section>

    <section class="roadMap">
        <div class="container-fluid">
            <h2 class="title">Nish Meram / Proje Süreci & Yol Haritası</h2>
            <div class="subTitle">Ön Görülen Teslim Tarihi: 08.08.2024</div>

            <div class="roadStages">
                85%
            </div>
        </div>
    </section>

    <section class="projectStages">
        <div class="container-fluid">
            <div class="projectStagesInfo">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="cardInfo">
                            <div class="content">
                                <div class="info">Proje Başlangıcı</div>
                                <div class="date">02.02.2022</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="card">
                            <div class="content">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque suscipit diam ac enim
                                dignissim, vitae posuere eros aliquam. Sed at dui quis est maximus lobortis a id risus.
                                Curabitur vel ligula quis orci ornare commodo in at ligula. Sed quis scelerisque magna,
                                quis commodo erat. Nam et laoreet sapien, id vulputate justo. Sed ullamcorper, neque in
                                gravida placerat, risus metus ultrices leo, at placerat tortor odio rutrum sem. Nullam
                                gravida nisl nec convallis dignissim. Vestibulum aliquam
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="projectStagesInfo">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="cardInfo">
                            <div class="content">
                                <div class="info">Temel Kazımı</div>
                                <div class="date">02.02.2022</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="card">
                            <div class="content imagesContent">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque suscipit diam ac enim
                                dignissim, vitae posuere eros aliquam. Sed at dui quis est maximus lobortis a id risus.
                                Curabitur vel ligula quis orci ornare commodo in at ligula. Sed quis scelerisque magna,
                                quis commodo erat. Nam et laoreet sapien, id vulputate justo. Sed ullamcorper, neque in
                                gravida placerat, risus metus ultrices leo, at placerat tortor odio rutrum sem. Nullam
                                gravida nisl nec convallis dignissim. Vestibulum aliquam

                                <div class="stageImages">

                                    <a data-fancybox="gallery" data-src="https://lipsum.app/id/2/1600x1200">
                                        <img src="assets/img/stagescardimg1.png " alt="">
                                    </a>

                                    <a data-fancybox="gallery" data-src="https://lipsum.app/id/3/1600x1200">
                                        <img src="assets/img/stagescardimg2.png " alt="">
                                    </a>

                                    <a data-fancybox="gallery" data-src="https://lipsum.app/id/4/1600x1200">
                                        <img src="assets/img/stagescardimg3.png " alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="projectStagesInfo">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="cardInfo">
                            <div class="content">
                                <div class="info">Sıva</div>
                                <div class="date">02.02.2022</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="card">
                            <div class="content">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque suscipit diam ac enim
                                dignissim, vitae posuere eros aliquam. Sed at dui quis est maximus lobortis a id risus.
                                Curabitur vel ligula quis orci ornare commodo in at ligula. Sed quis scelerisque magna,
                                quis commodo erat. Nam et laoreet sapien, id vulputate justo. Sed ullamcorper, neque in
                                gravida placerat, risus metus ultrices leo, at placerat tortor odio rutrum sem. Nullam
                                gravida nisl nec convallis dignissim. Vestibulum aliquam

                                <div class="videoWrapper">
                                    <a href="https://www.youtube.com/watch?v=2CTvgZ0-z40" class="videoCard">
                                        <div class="coverImage">
                                            <img src="assets/img/video.png" alt="">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="projectStagesInfo">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="cardInfo">
                            <div class="content">
                                <div class="info">Alçı</div>
                                <div class="date">02.02.2022</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="card">
                            <div class="content">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque suscipit diam ac enim
                                dignissim, vitae posuere eros aliquam. Sed at dui quis est maximus lobortis a id risus.
                                Curabitur vel ligula quis orci ornare commodo in at ligula. Sed quis scelerisque magna,
                                quis commodo erat. Nam et laoreet sapien, id vulputate justo. Sed ullamcorper, neque in
                                gravida placerat, risus metus ultrices leo, at placerat tortor odio rutrum sem. Nullam
                                gravida nisl nec convallis dignissim. Vestibulum aliquam
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="projectStagesInfo">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="cardInfo">
                            <div class="content">
                                <div class="info">Elektrik </div>
                                <div class="date">02.02.2022</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="card">
                            <div class="content">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque suscipit diam ac enim
                                dignissim, vitae posuere eros aliquam. Sed at dui quis est maximus lobortis a id risus.
                                Curabitur vel ligula quis orci ornare commodo in at ligula. Sed quis scelerisque magna,
                                quis commodo erat. Nam et laoreet sapien, id vulputate justo. Sed ullamcorper, neque in
                                gravida placerat, risus metus ultrices leo, at placerat tortor odio rutrum sem. Nullam
                                gravida nisl nec convallis dignissim. Vestibulum aliquam
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "inc.footer.php"; ?>