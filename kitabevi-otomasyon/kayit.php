<!DOCTYPE html>
<html>

<head>
    <title>Kayıt Ol</title>
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

</head>

<body>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="col-md-6">
            <form action="kayit-islem.php" class="main_form" method="post">
                <div class="row">
                    <div class="col-md-12 ">
                        <input class="contactus" placeholder="İsim" type="type" name="kullanici_ad">
                    </div>
                    <div class="col-md-12 ">
                        <input class="contactus" placeholder="Soyisim" type="type" name="kullanici_soyad">
                    </div>
                    <div class="col-md-12">
                        <input class="contactus" placeholder=" E-Posta" type="type" name="kullanici_eposta">
                    </div>
                    <div class="col-md-12">
                        <input class="contactus" placeholder=" Telefon Numarası" type="type" name="kullanici_telno">
                    </div>
                    <div class="col-md-12">
                        <input class="contactus" placeholder="Kullanıcı Adres" type="type"
                            name="kullanici_adres"></input>
                    </div>
                    <div class="col-md-12">
                        <input type="password" class="contactus" placeholder="Parola" type="type"
                            name="kullanici_sifre">
                        </input>
                    </div>
                    <div class="col-sm-12">
                        <button name="kayitol" type="submit" class="send_btn">Kayıt Ol</button>
                    </div>
                    <br>
                    <div class="d-flex justify-content-center align-items-center"><a href="giris.php">
                            <p style="color: white">zaten hesabın var mı?</p>
                        </a></div>
                </div>
            </form>
        </div>
    </div>



</body>

</html>