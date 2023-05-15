<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sipariş Ekleme</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div>
            <form action="siparis-islem.php" method="post">
                <div class="form-group">


                    <label>Kullanıcı ID</label>
                    <input type="text" class="form-control" name="kullanici_id">
                    <br>
                    <label>Kitap ID</label>
                    <input type="text" class="form-control" name="kitap_id">
                    <br>
                    <label>Sipariş Tarihi</label>
                    <input type=" text" class="form-control" name="siparis_tarih">
                    <label>Sipariş Durumu</label>
                    <input type=" text" class="form-control" name="siparis_durum">
                    <br>
                    <label>Tutar</label>
                    <input type=" text" class="form-control" name="toplam_tutar">
                    <label>Ödeme Yöntemi</label>
                    <input type=" text" class="form-control" name="odeme_yontemi">

                </div>
                <br>
                <button name="siparis-ekle" type="submit" class="btn btn-primary">Siparis Ekle</button>
            </form>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
                crossorigin="anonymous">
                </script>
        </div>
    </div>
</body>

</html>