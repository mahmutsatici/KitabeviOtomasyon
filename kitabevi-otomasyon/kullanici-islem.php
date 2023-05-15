<?php
include "baglanti.php";
if (isset($_POST["kullanici-ekle"])) {

    $kaydet = $baglanti->prepare("insert into kullanici set
    
    
    kullanici_ad=:kullanici_ad,
    kullanici_soyad=:kullanici_soyad,
    kullanici_adres=:kullanici_adres,
    kullanici_telno=:kullanici_telno,
    kullanici_eposta=:kullanici_eposta
    
    ");
    $insert = $kaydet->execute(
        array(

            "kullanici_ad" => $_POST["kullanici_ad"],
            "kullanici_soyad" => $_POST["kullanici_soyad"],
            "kullanici_adres" => $_POST["kullanici_adres"],
            "kullanici_telno" => $_POST["kullanici_telno"],
            "kullanici_eposta" => $_POST["kullanici_eposta"]
        )
    );
    if ($insert) {
        header("location:kullanici.php?durum=yes");
    } else {
        header("location:kullanici.php?durum=no");
    }
} else {
    echo "gelmediii";
}

if (isset($_POST["kullanici-duzenle"])) {
    $duzenle = $baglanti->prepare("UPDATE kullanici set
    
    kullanici_ad=:kullanici_ad,
    kullanici_soyad=:kullanici_soyad,
    kullanici_adres=:kullanici_adres,
    kullanici_telno=:kullanici_telno,
    kullanici_eposta=:kullanici_eposta

    where kullanici_id={$_POST["kullanici_id"]}    
    ");
    $update = $duzenle->execute(
        array(
            "kullanici_ad" => $_POST["kullanici_ad"],
            "kullanici_soyad" => $_POST["kullanici_soyad"],
            "kullanici_adres" => $_POST["kullanici_adres"],
            "kullanici_telno" => $_POST["kullanici_telno"],
            "kullanici_eposta" => $_POST["kullanici_eposta"]
        )
    );
    if ($update) {
        header("location:kullanici.php?durum=yes");
    } else {
        header("location:kullanici.php?durum=no");
    }
} else {
    echo "gelmedii";
}

if (isset($_GET['kullanicisil'])) {


    $sil = $baglanti->prepare("DELETE FROM kullanici WHERE kullanici_id=:kullanici_id");

    $sil->execute(
        array(

            'kullanici_id' => $_GET['kullanici_id']

        )
    );


    if ($sil) {
        Header("location:kullanici.php?durum=yes");
    } else {
        Header("location:kullanici.php?durum=no");
    }


}
?>