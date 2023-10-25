<?php include "inc.header.php"; ?>
<body class="preload">
<div class="page">
    <div class="pageBanner type4">

        <div class="content">
            <div class="side">
                Haitian Grup
            </div>
            <div class="title">
                <span> Çözüm Sunduğumuz Sektörler</span>
            </div>
        </div>
    </div>

    <div class="solutionsWrapper">
        <div class="row">
            <?php for ($i = 1; $i <= 7; $i++) { ?>

                <div class="col-md-4">
                    <div class="solutionsItem">
                        <div class="imgArea">
                            <img src="assets/img/solutions<?= $i ?>.png" alt="">
                        </div>
                        <div class="content">

                            <div class="title">
                                Otomotiv
                            </div>
                            <div class="text">
                                Anahtar düğmeleri (2K), klima, navi ekranları, aydınlatma, B sütunu, hava akışı, su pompası muhafazası, motor kapağı, ...
                            </div>
                            <a href="" class="goNews">
                                <span class="iconArea">
                                    <svg class="icon"><use xlink:href="#arrow"></use></svg>
                                </span>
                                Devamını Oku
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


