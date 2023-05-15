<?php
include "baglanti.php";

$urunsorgula = $baglanti->prepare("SELECT * FROM yayinevi where yayinevi_id=:yayinevi_id");
$urunsorgula->execute(
    array(
        "yayinevi_id" => $_GET["yayinevi_id"]
    )
);
$uruncek = $urunsorgula->fetch(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Yayın Düzenleme</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div>
            <form action="yayinevi-islem.php" method="post">
                <div class="form-group">
                    <label>Yayınevi Adı</label>
                    <input type="text" class="form-control" name="yayinevi_ad"
                        value="<?php echo $uruncek["yayinevi_ad"] ?>">
                    <br>
                    <label>Yayınevi Telefon No</label>
                    <input type="text" class="form-control" name="yayinevi_telno"
                        value="<?php echo $uruncek["yayinevi_telno"] ?>">
                    <br>
                    <label>Site</label>
                    <input type=" text" class="form-control" name="site" value="<?php echo $uruncek["site"] ?>">
                    <br>
                    <input type="hidden" class="form-control" name="yayinevi_id"
                        value="<?php echo $uruncek["yayinevi_id"] ?>">
                </div>
                <br>
                <button name=" yayinevi-duzenle" type="submit" class="btn btn-primary">Yayinevi Düzenle</button>
            </form>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
                crossorigin="anonymous">
                </script>
        </div>
    </div>
</body>

</html>