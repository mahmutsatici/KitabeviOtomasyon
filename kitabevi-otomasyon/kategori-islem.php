<?php
include "baglanti.php";
if (isset($_POST["kategori-ekle"])) {

    $kaydet = $baglanti->prepare("insert into kategori set
    
    
    kategori_ad=:kategori_ad,
    aciklama=:aciklama
    
    ");
    $insert = $kaydet->execute(
        array(

            "kategori_ad" => $_POST["kategori_ad"],
            "aciklama" => $_POST["aciklama"]
        )
    );
    if ($insert) {
        header("location:kategori.php?durum=yes");
    } else {
        header("location:kategori.php?durum=no");
    }
} else {
    echo "gelmedi";
}

if (isset($_POST["kategori-duzenle"])) {
    $duzenle = $baglanti->prepare("UPDATE kategori set
    
    kategori_ad=:kategori_ad,
    aciklama=:aciklama
    

    where kategori_id={$_POST["kategori_id"]}    
    ");
    $update = $duzenle->execute(
        array(
            "kategori_ad" => $_POST["kategori_ad"],
            "aciklama" => $_POST["aciklama"]
        )
    );
    if ($update) {
        header("location:kategori.php?durum=yes");
    } else {
        header("location:kategori.php?durum=no");
    }
} else {
    echo "gelmedi";
}

if (isset($_GET['kategorisil'])) {


    $sil = $baglanti->prepare("DELETE FROM kategori WHERE kategori_id=:kategori_id");

    $sil->execute(
        array(

            'kategori_id' => $_GET['kategori_id']

        )
    );


    if ($sil) {
        Header("location:kategori.php?durum=yes");
    } else {
        Header("location:kategori.php?durum=no");
    }


}
?>