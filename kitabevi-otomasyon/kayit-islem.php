<?php
include "baglanti.php";
if (isset($_POST["kayitol"])) {
    $kullanici_ad = $_POST["kullanici_ad"];
    $kullanici_soyad = $_POST["kullanici_soyad"];
    $kullanici_eposta = $_POST["kullanici_eposta"];
    $kullanici_telno = $_POST["kullanici_telno"];
    $kullanici_adres = $_POST["kullanici_adres"];
    $kullanici_sifre = $_POST["kullanici_sifre"];

    $kaydet = $baglanti->prepare("INSERT INTO kullanici (kullanici_ad, kullanici_soyad, kullanici_eposta, kullanici_telno, kullanici_adres, kullanici_sifre)
    VALUES (:kullanici_ad, :kullanici_soyad, :kullanici_eposta, :kullanici_telno, :kullanici_adres, :kullanici_sifre)");

    $insert = $kaydet->execute(
        array(
            "kullanici_ad" => $kullanici_ad,
            "kullanici_soyad" => $kullanici_soyad,
            "kullanici_eposta" => $kullanici_eposta,
            "kullanici_telno" => $kullanici_telno,
            "kullanici_adres" => $kullanici_adres,
            "kullanici_sifre" => $kullanici_sifre
        )
    );

    if ($insert) {
        header("location:anasayfakullanici.php?durum=yes");
    } else {
        header("location:kayit-hata.php");
    }
} else {
    echo "Form gönderimi yapılmadı.";
}
?>