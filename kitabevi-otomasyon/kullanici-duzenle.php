<?php
include "baglanti.php";

$urunsorgula = $baglanti->prepare("SELECT * FROM kullanici where kullanici_id=:kullanici_id");
$urunsorgula->execute(
    array(
        "kullanici_id" => $_GET["kullanici_id"]
    )
);
$uruncek = $urunsorgula->fetch(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kullanici ekleme</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div>
            <form action="kullanici-islem.php" method="post">
                <div class="form-group">
                    <label>Kullanıcı Adı</label>
                    <input type="text" class="form-control" name="kullanici_ad"
                        value="<?php echo $uruncek["kullanici_ad"] ?>">
                    <br>
                    <label>Kullanıcı Soyadı</label>
                    <input type="text" class="form-control" name="kullanici_soyad"
                        value="<?php echo $uruncek["kullanici_soyad"] ?>">
                    <br>
                    <label>Adres</label>
                    <input type=" text" class="form-control" name="kullanici_adres"
                        value="<?php echo $uruncek["kullanici_adres"] ?>">
                    <br>
                    <label>Telefon No</label>
                    <input type=" text" class="form-control" name="kullanici_telno"
                        value="<?php echo $uruncek["kullanici_telno"] ?>">
                    <label>E-Posta </label>
                    <input type=" text" class="form-control" name="kullanici_eposta"
                        value="<?php echo $uruncek["kullanici_eposta"] ?>">
                    <input type="hidden" class="form-control" name="kullanici_id"
                        value="<?php echo $uruncek["kullanici_id"] ?>">
                </div>
                <br>
                <button name=" kullanici-duzenle" type="submit" class="btn btn-primary">Kullanıcı Düzenle</button>
            </form>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
                crossorigin="anonymous">
            </script>
        </div>
    </div>
</body>

</html>