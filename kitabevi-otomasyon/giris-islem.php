<?php
include "baglanti.php";

if (isset($_POST['giris'])) {
    $kullanici_eposta = $_POST['kullanici_eposta'];
    $kullanici_sifre = $_POST['kullanici_sifre'];


    $kontrol = $baglanti->prepare("SELECT * FROM kullanici WHERE kullanici_eposta=:eposta AND kullanici_sifre=:sifre");
    $kontrol->execute(array('eposta' => $kullanici_eposta, 'sifre' => $kullanici_sifre));
    $kullanici = $kontrol->fetch();

    if ($kullanici) {
        $kullanici_id = $kullanici['kullanici_id'];

        if ($kullanici_id == 1) {

            Header("Location: anasayfa.php");
            exit();
        } else {

            Header("Location: anasayfakullanici.php?durum=yess");
            exit();
        }
    } else {

        Header("Location: giris.php?durum=no");
        exit();
    }
}


?>