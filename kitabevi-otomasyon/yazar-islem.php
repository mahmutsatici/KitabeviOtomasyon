<?php
include "baglanti.php";
if (isset($_POST["yazar-ekle"])) {

    $kaydet = $baglanti->prepare("insert into yazar set
    
    yazar_ad=:yazar_ad,
    yazar_soyad=:yazar_soyad,
    yazar_ulke=:yazar_ulke
    
    ");
    $insert = $kaydet->execute(
        array(

            "yazar_ad" => $_POST["yazar_ad"],
            "yazar_soyad" => $_POST["yazar_soyad"],
            "yazar_ulke" => $_POST["yazar_ulke"]
        )
    );
    if ($insert) {
        header("location:yazar.php?durum=yes");
    } else {
        header("location:yazar.php?durum=no");
    }
} else {
    echo "gelmedi";
}

if (isset($_POST["yazar-duzenle"])) {
    $duzenle = $baglanti->prepare("UPDATE yazar set
    
    yazar_ad=:yazar_ad,
    yazar_soyad=:yazar_soyad,
    yazar_ulke=:yazar_ulke

    where yazar_id={$_POST["yazar_id"]}    
    ");
    $update = $duzenle->execute(
        array(
            "yazar_ad" => $_POST["yazar_ad"],
            "yazar_soyad" => $_POST["yazar_soyad"],
            "yazar_ulke" => $_POST["yazar_ulke"]
        )
    );
    if ($update) {
        header("location:yazar.php?durum=yes");
    } else {
        header("location:yazar.php?durum=no");
    }
} else {
    echo "gelmedi";
}

if (isset($_GET['yazarsil'])) {


    $sil = $baglanti->prepare("DELETE FROM yazar WHERE yazar_id=:yazar_id");

    $sil->execute(
        array(

            'yazar_id' => $_GET['yazar_id']

        )
    );


    if ($sil) {
        Header("location:yazar.php?durum=yes");
    } else {
        Header("location:yazar.php?durum=no");
    }


}
?>