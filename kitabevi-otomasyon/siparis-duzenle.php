<?php
include "baglanti.php";

$urunsorgula = $baglanti->prepare("SELECT * FROM siparis where siparis_id=:siparis_id");
$urunsorgula->execute(
    array(
        "siparis_id" => $_GET["siparis_id"]
    )
);
$uruncek = $urunsorgula->fetch(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sipariş Düzenleme</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div>
            <form action="siparis-islem.php" method="post">
                <div class="form-group">
                    <label>Kullanıcı ID</label>
                    <input type="text" class="form-control" name="kullanici_id"
                        value="<?php echo $uruncek["kullanici_id"] ?>">
                    <br>
                    <label>Kitap ID</label>
                    <input type="text" class="form-control" name="kitap_id" value="<?php echo $uruncek["kitap_id"] ?>">
                    <br>
                    <label>Tarih</label>
                    <input type=" text" class="form-control" name="siparis_tarih"
                        value="<?php echo $uruncek["siparis_tarih"] ?>">
                    <br>
                    <label>Sipariş Durum</label>
                    <input type=" text" class="form-control" name="siparis_durum"
                        value="<?php echo $uruncek["siparis_durum"] ?>">
                    <label>Tutar </label>
                    <input type=" text" class="form-control" name="toplam_tutar"
                        value="<?php echo $uruncek["toplam_tutar"] ?>">
                    <label>Ödeme Yöntemi </label>
                    <input type=" text" class="form-control" name="odeme_yontemi"
                        value="<?php echo $uruncek["odeme_yontemi"] ?>">

                    <input type="hidden" class="form-control" name="siparis_id"
                        value="<?php echo $uruncek["siparis_id"] ?>">
                </div>
                <br>
                <button name=" siparis-duzenle" type="submit" class="btn btn-primary">Sipariş Düzenle</button>
            </form>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
                crossorigin="anonymous">
                </script>
        </div>
    </div>
</body>

</html>