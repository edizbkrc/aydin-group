<?php include "inc.header.php"; ?>
<body class="preload">
<div class="page pageSolutionsDetail">
    <div class="pageBanner type5">
        <div class="background">
            <img src="assets/img/solutionsbanner.png" alt="">
        </div>
        <div class="content">
            <div class="side">
                Haitian Grup
            </div>
            <div class="title">
                <small>PAZARLAR</small>
                Otomotiv Endüstrisi
            </div>

        </div>
        <div class="descriptonWrapper">
            <div class="iconArea">
                <div class="icon" style="--icon:url(../img/svg/car.svg)"></div>
            </div>
            <div class="description">
                <b>Karmaşıklığı içinde, otomotiv endüstrisi muhtemelen en geniş uygulama yelpazesine sahip pazardır. İç
                    mekan için görünür parçalar, güç aktarma organları için kolay parçalar, dış mekan için optik hassas
                    parçalar, tamponlar veya kokpitler gibi büyük parçalar ve çok daha fazlası. Ayrıca, parçaların
                    işlevine bağlı olarak, hem ürün tarafında hem de yukarı ve aşağı yönde işlemede çok çeşitli
                    gereksinimleri karşılamak için farklılaştırılmış üretim çözümleri gereklidir. Her ürün grubunun
                    malzeme homojenliği, yüzey kalitesi, hassasiyet ve diğer konularda kendine özgü gereksinimleri
                    vardır.</b>
                <br>
                <br>
                Buna bir de malzeme ve süreç kombinasyonları (çok bileşenli üretim, köpük, LSR, IML, IMD, vb.) yoluyla
                uygulamaların çeşitliliği ekleniyor.Bu parça ve üretim çeşitliliği göz önüne alındığında, T1
                tedarikçileri ve ağları giderek artan bir baskı altındadır. Kalite gereksinimleri çok büyük, ürün yaşam
                döngüleri gittikçe kısalıyor ve fiyat baskısı artıyor.
            </div>
        </div>
    </div>
    <div class="container customContainer">
        <div class="owl-carousel owlGallery">
            <?php for ($i = 1; $i <= 5; $i++) { ?>
                <div class="item">
                    <a href="assets/img/solutionsimg<?= $i ?>.png" class="galleryItem type2">
                        <img src="assets/img/solutionsimg<?= $i ?>.png" alt="">
                    </a>
                </div>
            <?php } ?>
            <?php for ($i = 1; $i <= 5; $i++) { ?>
                <div class="item">
                    <a href="assets/img/solutionsimg<?= $i ?>.png" class="galleryItem type2">
                        <img src="assets/img/solutionsimg<?= $i ?>.png" alt="">
                    </a>
                </div>
            <?php } ?>
        </div>
        <div class="solutionsContent">
            <div class="pageTitle">
                <small>ZORLUKLAR</small>
                DEĞİŞEN OTOMOTİV SEKTÖRÜ
            </div>


            <div class="wdot">
            </div>
            <div class="editorContent">
                <p>
                    <b> Çevrenin korunması açısından yeni gereklilikler maliyet sarmalını daha da körükleyecektir.
                        Maliyet baskısı üretim ve lojistiğe yansıdıkça işlemci için son teslim tarihi baskısı da
                        artacaktır. Dahası, fütürologlar otomotiv endüstrisinin geniş kapsamlı değişikliklerle karşı
                        karşıya olduğunu düşünüyor. Alternatif sürücüler ve otonom sürüş, otomotiv kültürünün
                        gelecek
                        vizyonlarını şekillendirecek.</b>
                    <br>
                    <br>
                    İhtiyaç duyulan şey, makine tarafında maksimum esneklik, üretkenlik, en yüksek kalite ve son
                    derece ekonomik ve ekolojik açıdan avantajlı çözümler için yeni konseptlerdir. Rekabet ne kadar
                    çetin olursa, plastik işlemedeki üretim portföyü de o kadar esnek olmalıdır. "Nokta atışı
                    teknoloji" otomotiv endüstrisinde son derece önemlidir. Muhtemelen diğer tüm sektörlerden daha
                    önemlidir.
                </p>
            </div>
            <div class="pageTitle">
                <small>MÜŞTERİ HİKAYELERİ
                </small>

            </div>
            <div class="wdot">
            </div>
            <div class="customerStoryItem">
                <div class="imgArea">
                    <img src="assets/img/customer1.png" alt="">
                </div>
                <div class="content">
                    <div class="title">
                        E-MOBİLİTE SEKTÖRÜNÜN DEĞER ZİNCİRİNİ YENİDEN İNŞA EDEN HAİTİSTAN ÇOKLU BİLEŞEN ÇÖZÜMÜ
                    </div>
                    <a href="" class="goNews">
                                <span class="iconArea">
                                    <svg class="icon"><use xlink:href="#arrow"></use></svg>
                                </span>
                        Devamını Oku
                    </a>
                </div>
            </div>
            <div class="customerStoryItem">
                <div class="imgArea">
                    <img src="assets/img/customer2.png" alt="">
                </div>
                <div class="content">
                    <div class="title">
                        YÜKSEK KALITEDE DEĞER YARATMAK IÇIN YENI TEKNOLOJIYI BENIMSEMEK
                    </div>
                    <a href="" class="goNews">
                                <span class="iconArea">
                                    <svg class="icon"><use xlink:href="#arrow"></use></svg>
                                </span>
                        Devamını Oku
                    </a>
                </div>
            </div>
            <div class="customerStoryItem">
                <div class="imgArea">
                    <img src="assets/img/customer3.png" alt="">
                </div>
                <div class="content">
                    <div class="title">
                        ZORLUKLARA GÖĞÜS GERMEK
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

    </div>
</div>
</body>
<?php include "inc.footer.php"; ?>


