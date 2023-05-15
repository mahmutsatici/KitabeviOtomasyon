<?php
include "baglanti.php";

$urunsorgula = $baglanti->prepare("SELECT * FROM kategori where kategori_id=:kategori_id");
$urunsorgula->execute(
    array(
        "kategori_id" => $_GET["kategori_id"]
    )
);
$uruncek = $urunsorgula->fetch(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kategori ekleme</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div>
            <form action="kategori-islem.php" method="post">
                <div class="form-group">
                    <label>Kategori Adı</label>
                    <input type="text" class="form-control" name="kategori_ad"
                        value="<?php echo $uruncek["kategori_ad"] ?>">
                    <br>
                    <label>Açıklama</label>
                    <input type="text" class="form-control" name="aciklama" value="<?php echo $uruncek["aciklama"] ?>">
                    <br>
                    <input type="hidden" class="form-control" name="kategori_id"
                        value="<?php echo $uruncek["kategori_id"] ?>">
                </div>
                <br>
                <button name=" kategori-duzenle" type="submit" class="btn btn-primary">Kategori Düzenle</button>
            </form>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
                crossorigin="anonymous">
                </script>
        </div>
    </div>
</body>

</html>