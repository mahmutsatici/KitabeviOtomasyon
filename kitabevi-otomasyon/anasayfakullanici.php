<?php
include "baglanti.php";

?>
<!DOCTYPE html>
<html>

<head>
    <title>Anasayfa</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <style>
    html,
    body,
    h1,
    h2,
    h3,
    h4 {
        font-family: "Lato", sans-serif
    }

    .mySlides {
        display: none
    }

    .w3-tag,
    .fa {
        cursor: pointer
    }

    .w3-tag {
        height: 15px;
        width: 15px;
        padding: 0;
        margin-top: 6px
    }
    </style>
</head>

<body>

    <body style="background-color: #dddddd;">
        <div class="pos-f-t">
            <div class="collapse" id="navbarToggleExternalContent">
                <div class=" p-4" style="background-color: #001920;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <a href="anasayfakullanici.php"><img width="200px" src="tasarım/resimler/book.png"
                                        alt="foto ismi" /></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <nav class="navbar navbar-dark" style="background-color: #4a2b13 ; ">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


            </nav>
            <div class="row">
                <div class="col-md-12" style="text-align:center;">

                    <?php if (@$_GET["durum"] == "yesss") { ?>
                    <div class="alert bg-success" id="successAlert">
                        <b style="color:aliceblue">Sipariş Başarılı</b>
                    </div>
                    <?php } else if (@$_GET["durum"] == "yes") { ?>
                    <div class="alert bg-success" id="successAlert">
                        <b style="color:aliceblue">Kayıt Başarılı</b>
                    </div>
                    <script>
                    setTimeout(function() {
                        document.getElementById("successAlert").style.display = "none";
                    }, 2000); // 3 saniye sonra mesaj kutusunu gizle
                    </script>
                    <?php } else if (@$_GET["durum"] == "no") { ?>
                    <div class="alert bg-danger" id="successAlert">
                        <b style="color:aliceblue">Başarısız</b>

                    </div>
                    <script>
                    setTimeout(function() {
                        document.getElementById("successAlert").style.display = "none";
                    }, 2000); // 3 saniye sonra mesaj kutusunu gizle
                    </script>

                    <?php } else if (@$_GET["durum"] == "yess") { ?>
                    <div class="alert bg-success" id="successAlert">
                        <b style="color:aliceblue">Giriş Başarılı</b>

                    </div>
                    <script>
                    setTimeout(function() {
                        document.getElementById("successAlert").style.display = "none";
                    }, 2000); // 3 saniye sonra mesaj kutusunu gizle
                    </script>
                    <?php } ?>
                </div>
            </div>

        </div>
        <div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">



            <!-- Slideshow -->
            <div class="w3-container">
                <div class="w3-display-container mySlides">
                    <img src="tasarım/resimler/1.jpeg" style="width:100%">
                    <div class="w3-display-topleft w3-container w3-padding-32">

                    </div>
                </div>
                <div class="w3-display-container mySlides">
                    <img src="tasarım/resimler/2.jpeg" style="width:100%">
                    <div class="w3-display-middle w3-container w3-padding-32">

                    </div>
                </div>
                <div class="w3-display-container mySlides">
                    <img src="tasarım/resimler/3.jpeg" style="width:100%">
                    <div class="w3-display-topright w3-container w3-padding-32">

                    </div>
                </div>


                <div style="background-color: #5a2f27;" class="w3-container w3-padding w3-xlarge">
                    <div class="w3-left" onclick="plusDivs(-1)"><i
                            class="fa fa-arrow-circle-left w3-hover-text-teal"></i>
                    </div>
                    <div class="w3-right" onclick="plusDivs(1)"><i
                            class="fa fa-arrow-circle-right w3-hover-text-teal"></i>
                    </div>

                    <div class="w3-center">
                        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white"
                            onclick="currentDiv(1)"></span>
                        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white"
                            onclick="currentDiv(2)"></span>
                        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white"
                            onclick="currentDiv(3)"></span>
                    </div>
                </div>
            </div>

            <!-- Grid -->
            <div class="w3-row w3-container" style="text-align:center">
                <div class="w3-center w3-padding-64">
                    <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Bazı Kategoriler</span>
                </div>
                <div class="w3-col l3 m6 w3-light-grey w3-container w3-padding-16">
                    <h3>Roman</h3>
                    <p>Kurgusal hikayelerin yer aldığı kitaplar</p>
                </div>

                <div class="w3-col l3 m6 w3-grey w3-container w3-padding-16">
                    <h3>Klasik</h3>
                    <p>Tarihi dönemlere ait eski konuları içeren eserler</p>
                </div>

                <div class="w3-col l3 m6 w3-dark-grey w3-container w3-padding-16">
                    <h3>Bilim-Kurgu</h3>
                    <p>Gelecek zaman ve bilim konulu kitaplar</p>
                </div>

                <div class="w3-col l3 m6 w3-black w3-container w3-padding-16">
                    <h3 style="color:white">Macera</h3>
                    <p>Heyecanlı ve riskli olayları içeren kitaplar</p>
                </div>
            </div>




            <!-- Grid -->
            <div class="w3-row-padding" id="about">
                <div class="w3-center w3-padding-64">
                    <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Önemli Yazarlar</span>
                </div>



                <div class="w3-third w3-margin-bottom">
                    <div class="w3-card-4">
                        <img src="tasarım/resimler/tarik-bugra.jpg" alt="Mike" style="width:100%">
                        <div class="w3-container">
                            <h3>TARIK BUĞRA</h3>
                            <p>
                                Tarık Buğra (1918-1994), Türk yazar ve gazeteci. İstanbul Üniversitesi Hukuk Fakültesi
                                mezunu olan Buğra, özellikle Türk edebiyatında yer edinmiş romanlarıyla tanınır. İlk
                                romanı
                                "Küçük Ağa" (1939) ile edebiyat dünyasına adım atan Buğra, daha sonra "Karanfil ve
                                Yasemin",
                                "Tutunamayanlar" ve "İbiş'in Rüyası" gibi önemli eserler kaleme aldı. Ayrıca gazetecilik
                                de
                                yapan Buğra, uzun yıllar Cumhuriyet gazetesinde yazılarıyla okurların karşısına çıktı.
                            </p>
                            <p>
                        </div>
                    </div>
                </div>
                <div class="w3-third w3-margin-bottom">
                    <div class="w3-card-4">
                        <img src="tasarım/resimler/dostoyevski.jpeg" alt="John" style="width:100%">
                        <div class="w3-container">
                            <h3>DOSTOYEVSKİ</h3>

                            <p>Fyodor Dostoevsky (1821-1881), Rus yazar, filozof ve gazeteci. Eserleri, insanın doğası
                                ve
                                ahlaki değerleri üzerine derinlemesine bir araştırma yapmasıyla tanınır. Dostoevsky,
                                yoksulluk, ahlaki çöküntü, şiddet, aşk ve din gibi konuları ele aldığı romanlarıyla
                                dünya
                                edebiyatında önemli bir yere sahiptir. Bazı en ünlü eserleri arasında "Suç ve Ceza",
                                "Karamazov Kardeşler", "Yeraltından Notlar" ve "Budala" yer almaktadır. Dostoevsky'nin
                                eserleri, insan doğasının karmaşıklığını ve ahlaki kararların ne kadar zorlu
                                olabileceğini
                                ele alır ve bu nedenle edebiyat tarihinin en önemli figürlerinden biri olarak kabul
                                edilir.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="w3-third w3-margin-bottom">
                    <div class="w3-card-4">
                        <img src="tasarım/resimler/julesverne.jpg" alt="Jane" style="width:100%">
                        <div class="w3-container">
                            <h3>JULES VERNE</h3>
                            <p>
                                Jules Verne (1828-1905) Fransız yazar ve oyun yazarıdır. Kendisi bilim-kurgu ve macera
                                romanları yazmıştır. En ünlü eserleri arasında "Denizler Altında Yirmi Bin Fersah",
                                "Dünya'nın Merkezine Yolculuk" ve "Ay'a Yolculuk" gibi kitaplar yer alır. Jules Verne,
                                eserlerinde bilim ve teknolojinin ilerlemesi ile birlikte insan hayatına nasıl etki
                                ettiğini
                                anlatır. Onun yazdığı kitaplar, o dönemde mümkün görülmeyen keşifler ve teknolojik
                                ilerlemeler hakkındaki hayalleri ile ünlüdür.</p>
                            <p>

                        </div>


                    </div><br><br><br><br><br>
                </div>

            </div>
            <table class="table  table-hover " style="background-color: #cccccc;">
                <thead>
                    <tr class="text-dark">
                        <th>Kitap Resmi</th>
                        <th>Kitap Adı</th>
                        <th>Yayın Tarihi</th>
                        <th>Sayfa Sayısı</th>
                        <th>Fiyat</th>
                        <th>Stok Sayısı</th>

                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                $urunsorgula = $baglanti->prepare("SELECT * FROM kitap");
                $urunsorgula->execute();
                while ($uruncek = $urunsorgula->fetch(PDO::FETCH_ASSOC)) {

                    ?>

                    <tr>
                        <td>
                            <img width="65px" src=<?php echo $uruncek["kitap_resim"] ?> alt="foto ismi" />

                        </td>
                        <td>
                            <?php echo $uruncek["kitap_ad"] ?>
                        </td>
                        <td>
                            <?php echo $uruncek["yayin_tarihi"] ?>
                        </td>
                        <td>
                            <?php echo $uruncek["sayfa_sayisi"] ?>
                        </td>
                        <td>
                            <?php echo $uruncek["fiyat"] ?> TL
                        </td>
                        <td>
                            <?php echo $uruncek["stok_sayisi"] ?>
                        </td>


                        <td> <a
                                href="anasayfakullanici-islem.php?siparisver&kitap_id=<?php echo $uruncek["kitap_id"] ?>"><button
                                    type=" submit" class="btn btn-warning">Sipariş ver</button></a> </td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>

        <!-- Footer -->

        <footer style="background-color:#E3CAA5" class="w3-container w3-padding-32  w3-center">
            <h4>Footer</h4>
            <a href="#" class="w3-button w3-black w3-margin"><i class="fa fa-arrow-up w3-margin-right"></i>Üste Çık</a>
            <div class="w3-xlarge w3-section">
                <i class="fa fa-facebook-official w3-hover-opacity"></i>
                <i class="fa fa-instagram w3-hover-opacity"></i>
                <i class="fa fa-snapchat w3-hover-opacity"></i>
                <i class="fa fa-pinterest-p w3-hover-opacity"></i>
                <i class="fa fa-twitter w3-hover-opacity"></i>
                <i class="fa fa-linkedin w3-hover-opacity"></i>
            </div>

        </footer>



        <script>
        // Slideshow
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function currentDiv(n) {
            showDivs(slideIndex = n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demodots");
            if (n > x.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = x.length
            };
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" w3-white", "");
            }
            x[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " w3-white";
        }
        </script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>

    </body>

</html>