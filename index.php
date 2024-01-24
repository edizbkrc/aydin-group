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


    <?php include "inc.footer.php"; ?>