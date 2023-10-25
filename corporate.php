<?php include "inc.header.php"; ?>
<body class="preload">
<div class="page">
    <div class="pageBanner">
        <div class="background">
            <img src="assets/img/corporatebanner.png" alt="">
        </div>
        <div class="content">
            <div class="side">
                Haitian Grup
            </div>
            <div class="title">
               <span> GÜÇ. PERFORMANS.
                TUTARLILIK.</span>
            </div>
        </div>
    </div>
    <div class="container customContainer">
        <div class="pageContent">
            <div class="editorContent">
                <p>
                    1966 yılında kurulan Haitian Group, girişimci zekasıyla 50 yılı aşkın bir süredir büyüyerek, çok
                    uluslu operasyonlara ve 18,3 milyar RMB'yi aşan toplam varlıklara sahip bir holding şirketine
                    dönüşmüştür. Grup şu anda plastik makineleri ("Haitian International Holdings Limited" Hong Kong
                    Borsası'nda listelenmiştir), CNC makineleri ("Ningbo Haitian Precision Holdings Limited" Şangay
                    Borsası'nda listelenmiştir), tahrik ve kontrol sistemleri ("Haitian Drive") ve basınçlı döküm
                    makineleri ("Haitian Die Casting"), akıllı çözümler ("Haitian Smart") olmak üzere başlıca beş
                    sektörü kapsamaktadır.
                    <br>
                    <br>
                    Beş şirket, dünya çapında 80'den fazla iştirakle bağlantılıdır. Grup, 2022 yılında 130'dan fazla
                    ülke ve bölgedeki müşterilerine sattığı ürünlerle 18,3 milyar RMB'yi aşan toplam üretim değeri elde
                    etmiştir.
                    <br>
                    <br>
                    Son yıllarda, Haitian Group bünyesindeki şirketler, "Ulusal Yenilikçi İşletme", "Ulusal Anahtar
                    Yüksek Teknoloji İşletmesi", "Ünlü Çin Markası" ve "Devlet Bilim ve Teknoloji Ödülleri" vb. dahil
                    olmak üzere ulusal, il ve belediye düzeyinde çeşitli ödüller kazanmıştır.
                </p>
            </div>
            <hr>
            <a href="" class="videoItem">
                <div class="coverImage">
                    <img src="assets/img/videocover.png" alt="">
                </div>
            </a>
            <img src="assets/img/svg/milestones.svg" alt="" class="timeLineImg">
            <div class="timeline">
                <?php for ($i = 1; $i <= 8; $i++) { ?>
                    <div class="timelineItem">

                        <div class="imgArea">
                            <img src="assets/img/timeline<?= $i ?>.png" alt="">
                        </div>
                        <div class="year">
                            1966
                        </div>
                        <div class="text">
                            JIANGNAN TARIM MAKİNELERİ FABRİKASI KURULDU (HAITİAN GRUBUNUN SELEFİ)
                        </div>

                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

</div>
</body>
<?php include "inc.footer.php"; ?>


