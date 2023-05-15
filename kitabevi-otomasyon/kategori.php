<?php
include "baglanti.php";

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kategoriler</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body style="background-color: #dddddd;">
    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class=" p-4" style="background-color: #001920;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <a href="anasayfa.php"><img width="200px" src="tasarım/resimler/book.png"
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
            <a class="text-white nav-link ml-2" style="text-decoration:none;" href=" kitap.php">KİTAPLAR</a>
            <a class="text-white nav-link ml-2" style="text-decoration:none;" href="yazar.php">YAZARLAR</a>
            <a class="text-white nav-link ml-2" style="text-decoration:none;" href="yayinevi.php">YAYINEVLERİ</a>
            <a class="text-white nav-link ml-2" style="text-decoration:underline;" href="kategori.php">KATEGORİLER</a>
            <a class="text-white nav-link ml-2" style="text-decoration:none;" href="kullanici.php">KULLANICILAR</a>
            <a class="text-white nav-link ml-2" href="siparis.php"
                style="padding-right: 200px;text-decoration:none;">SİPARİŞLER</a>
        </nav>
    </div>
    <div class="container">
        <div>
            <?php
            if (@$_GET["durum"] == "yes") { ?>
            <div class="alert bg-success">
                <b style="color:aliceblue">Başarılı</b>
            </div>
            <?php
            } else if (@$_GET["durum"] == "no") { ?>
            <div class="alert bg-danger">
                <b style="color:aliceblue">Başarısız</b>
            </div>
            <?php
            } ?>
        </div>

        <br>
        <a href="kategori-ekle.php"><button style="float:right" class="btn btn-dark" type="submit">Kategori
                Ekle</button></a>
        <br><br>

        <table class="table  table-hover " style="background-color: #cccccc;">
            <thead>
                <tr class="text-dark">
                    <th>Kategori ID</th>
                    <th>Kategori Adı</th>
                    <th>Açıklama</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $urunsorgula = $baglanti->prepare("SELECT * FROM kategori");
                $urunsorgula->execute();
                while ($uruncek = $urunsorgula->fetch(PDO::FETCH_ASSOC)) {

                    ?>

                <tr>
                    <td>
                        <?php echo $uruncek["kategori_id"] ?>
                    </td>
                    <td>
                        <?php echo $uruncek["kategori_ad"] ?>
                    </td>
                    <td>
                        <?php echo $uruncek["aciklama"] ?>
                    </td>

                    <td>
                        <a href=" kategori-duzenle.php?kategori_id=<?php echo $uruncek["kategori_id"] ?> ">
                            <button type=" submit" class="btn btn-success">Düzenle</button></a>
                    </td>
                    <td> <a href="kategori-islem.php?kategorisil&kategori_id=<?php echo $uruncek["kategori_id"] ?>"><button
                                type="submit" class="btn btn-danger">Sil</button></a> </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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