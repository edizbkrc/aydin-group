<?php include "inc.header.php"; ?>
<body class="preload">
<div class="page">
    <div class="pageBanner type2">

        <div class="content">
            <div class="side">
                Haitian Grup
            </div>
            <div class="title">
                <span> Bizden Haberler</span>
            </div>
        </div>
    </div>
    <div class="container customContainer">
        <div class="row">
            <?php for ($i = 1; $i <= 4; $i++) { ?>

                <div class="col-sm-6">
                    <div class="newsItem2">
                        <div class="imgArea">
                            <img src="assets/img/news<?= $i ?>.png" alt="">
                        </div>
                        <div class="content">
                            <div class="date">21.08.2022</div>
                            <div class="title">
                                Çin'in Meksika Büyükelçisi Haiti Meksikasi'ni Ziyaret Etti.
                            </div>
                            <div class="text">
                                Çin'in Meksika Büyükelçisi Zhang Run ve ekibi yerel saatle 16 Ağustos'ta Haitian Mexico'yu ziyaret etti. Haitian Mexico Genel Müdürü Xu Biyun da resepsiyona katıldı ve ziyarete eşlik etti.
                            </div>
                            <a href="" class="goNews">
                                <svg class="icon"><use xlink:href="#arrow"></use></svg>
                                Haber Detaylarını Gör
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>

</div>
</body>
<?php include "inc.footer.php"; ?>


