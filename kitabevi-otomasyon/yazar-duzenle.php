<?php
include "baglanti.php";

$urunsorgula = $baglanti->prepare("SELECT * FROM yazar where yazar_id=:yazar_id");
$urunsorgula->execute(
    array(
        "yazar_id" => $_GET["yazar_id"]
    )
);
$uruncek = $urunsorgula->fetch(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Yazar ekleme</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div>
            <form action="yazar-islem.php" method="post">
                <div class="form-group">
                    <label>Yazar Adı</label>
                    <input type="text" class="form-control" name="yazar_ad" value="<?php echo $uruncek["yazar_ad"] ?>">
                    <br>
                    <label>Yazar Soyadı</label>
                    <input type="text" class="form-control" name="yazar_soyad"
                        value="<?php echo $uruncek["yazar_soyad"] ?>">
                    <br>
                    <label>Yazarın Ülkesi</label>
                    <input type=" text" class="form-control" name="yazar_ulke"
                        value="<?php echo $uruncek["yazar_ulke"] ?>">

                    <input type="hidden" class="form-control" name="yazar_id"
                        value="<?php echo $uruncek["yazar_id"] ?>">
                </div>
                <br>
                <button name=" yazar-duzenle" type="submit" class="btn btn-primary">Yazar Düzenle</button>
            </form>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
                crossorigin="anonymous">
                </script>
        </div>
    </div>
</body>

</html>