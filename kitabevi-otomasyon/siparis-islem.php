<?php
include "baglanti.php";
if (isset($_POST["siparis-ekle"])) {

    $kaydet = $baglanti->prepare("insert into siparis set
    
    
    kullanici_id=:kullanici_id,
    kitap_id=:kitap_id,
    siparis_tarih=:siparis_tarih,
    siparis_durum=:siparis_durum,
    toplam_tutar=:toplam_tutar,
    odeme_yontemi=:odeme_yontemi
    
    ");
    $insert = $kaydet->execute(
        array(

            "kullanici_id" => $_POST["kullanici_id"],
            "kitap_id" => $_POST["kitap_id"],
            "siparis_tarih" => $_POST["siparis_tarih"],
            "siparis_durum" => $_POST["siparis_durum"],
            "toplam_tutar" => $_POST["toplam_tutar"],
            "odeme_yontemi" => $_POST["odeme_yontemi"]
        )
    );
    if ($insert) {
        header("location:siparis.php?durum=yes");
    } else {
        header("location:siparis.php?durum=no");
    }
} else {
    echo "gelmediii";
}

if (isset($_POST["siparis-duzenle"])) {
    $duzenle = $baglanti->prepare("UPDATE siparis set
    
    kullanici_id=:kullanici_id,
    kitap_id=:kitap_id,
    siparis_tarih=:siparis_tarih,
    siparis_durum=:siparis_durum,
    toplam_tutar=:toplam_tutar,
    odeme_yontemi=:odeme_yontemi

    where siparis_id={$_POST["siparis_id"]}    
    ");
    $update = $duzenle->execute(
        array(
            "kullanici_id" => $_POST["kullanici_id"],
            "kitap_id" => $_POST["kitap_id"],
            "siparis_tarih" => $_POST["siparis_tarih"],
            "siparis_durum" => $_POST["siparis_durum"],
            "toplam_tutar" => $_POST["toplam_tutar"],
            "odeme_yontemi" => $_POST["odeme_yontemi"]
        )
    );
    if ($update) {
        header("location:siparis.php?durum=yes");
    } else {
        header("location:siparis.php?durum=no");
    }
} else {
    echo "gelmedii";
}

if (isset($_GET['siparissil'])) {


    $sil = $baglanti->prepare("DELETE FROM siparis WHERE siparis_id=:siparis_id");

    $sil->execute(
        array(

            'siparis_id' => $_GET['siparis_id']

        )
    );


    if ($sil) {
        Header("location:siparis.php?durum=yes");
    } else {
        Header("location:siparis.php?durum=no");
    }


}
?>