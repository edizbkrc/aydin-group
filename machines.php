<?php include "inc.header.php"; ?>
<body class="preload">
<div class="page">
    <div class="pageBanner type6">
        <div class="background">
            <img src="assets/img/machines.png" alt="">
        </div>
        <div class="content">
            <div class="side">
                Haitian Grup
            </div>
            <div class="title">
                <span> Hassas ve Dinamik</span>
            </div>
        </div>
    </div>
    <div class="container customContainer">
        <div class="row">
            <?php for ($i = 1; $i <= 3; $i++) { ?>
                <div class="col-lg-4 col-sm-6">
                    <div class="productItem2">
                        <div class="logo">
                            <img src="assets/img/zhafir.png" alt="">
                        </div>
                        <div class="imgArea">
                            <div class="ghostText">
                                VE
                            </div>
                            <img src="assets/img/product<?= $i ?>.png" alt="">
                        </div>
                        <div class="content">
                            <a href="" class="downloadDocument">
                                <svg class="icon">
                                    <use xlink:href="#pdf"></use>
                                </svg>
                                Döküman İndir
                            </a>
                            <div class="title">
                                ZHAFIR VENUS SERIES
                            </div>
                            <div class="text">
                                400 - 8.000 KN
                                TAMAMEN ELEKTRIKLI ÇÖZÜM
                            </div>
                            <a href="" class="view">
                                <svg class="icon">
                                    <use xlink:href="#arrow"></use>
                                </svg>
                                Detaylı İncele
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>


        <div class="pageTitle">
            GÜVENİLİRLİK & VERİMLİLİK
            <small> SERVO-HIDROLIK ÇÖZÜMÜMÜZ
            </small>

        </div>
        <div class="row">
            <?php for ($i = 1; $i <= 2; $i++) { ?>
                <div class="col-md-4">
                    <div class="productItem2">
                        <div class="logo">
                            <img src="assets/img/zhafir.png" alt="">
                        </div>
                        <div class="imgArea">
                            <div class="ghostText">
                                VE
                            </div>
                            <img src="assets/img/product<?= $i ?>.png" alt="">
                        </div>
                        <div class="content">
                            <a href="" class="downloadDocument">
                                <svg class="icon">
                                    <use xlink:href="#pdf"></use>
                                </svg>
                                Döküman İndir
                            </a>
                            <div class="title">
                                ZHAFIR VENUS SERIES
                            </div>
                            <div class="text">
                                400 - 8.000 KN
                                TAMAMEN ELEKTRIKLI ÇÖZÜM
                            </div>
                            <a href="" class="view">
                                <svg class="icon">
                                    <use xlink:href="#arrow"></use>
                                </svg>
                                Detaylı İncele
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="col-md-4">
                <div class="contactWidget">
                    <img src="assets/img/contactwidget.png" alt="" class="background">
                    <div class="content">
                        <div class="text">Müşteri Odakl Hizmet <br>7/24 Destek Hattı*</div>
                        <a href="" class="phone">0850 666 00 34</a>
                        <hr>
                        <a href="" class="contactus">Bize Yazın</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
</body>
<?php include "inc.footer.php"; ?>


