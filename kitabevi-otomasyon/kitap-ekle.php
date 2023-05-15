<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kitap ekleme</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div>
            <form action="kitap-islem.php" method="post">
                <div class="form-group">


                    <label>Kitap Adı</label>
                    <input type="text" class="form-control" name="kitap_ad">
                    <br>
                    <label>Yazar ID</label>
                    <input type="text" class="form-control" name="yazar_id">
                    <br>
                    <label>Yayınevi ID</label>
                    <input type=" text" class="form-control" name="yayinevi_id">
                    <br>
                    <label>Kategori ID</label>
                    <input type=" text" class="form-control" name="kategori_id">
                    <label>Yayın Tarihi</label>
                    <input type=" text" class="form-control" name="yayin_tarihi">
                    <label>Sayfa Sayısı</label>
                    <input type=" text" class="form-control" name="sayfa_sayisi">
                    <label>Fiyat</label>
                    <input type=" text" class="form-control" name="fiyat">
                    <label>Stok Sayısı</label>
                    <input type=" text" class="form-control" name="stok_sayisi">
                    <label>Kitap Resim Linki</label>
                    <input type=" text" class="form-control" name="kitap_resim">

                </div>
                <br>
                <button name="kitap-ekle" type="submit" class="btn btn-primary">Kitap Ekle</button>
            </form>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
                crossorigin="anonymous">
            </script>
        </div>
    </div>
</body>

</html>