<?php
include "baglanti.php";
if (isset($_POST["kitap-ekle"])) {

    $kaydet = $baglanti->prepare("insert into kitap set
    
    kitap_ad=:kitap_ad,
    yazar_id=:yazar_id,
    yayinevi_id=:yayinevi_id,
    kategori_id=:kategori_id,
    yayin_tarihi=:yayin_tarihi,
    sayfa_sayisi=:sayfa_sayisi,
    fiyat=:fiyat,
    stok_sayisi=:stok_sayisi,
    kitap_resim=kitap_resim
    
    ");
    $insert = $kaydet->execute(
        array(

            "kitap_ad" => $_POST["kitap_ad"],
            "yazar_id" => $_POST["yazar_id"],
            "yayinevi_id" => $_POST["yayinevi_id"],
            "kategori_id" => $_POST["kategori_id"],
            "yayin_tarihi" => $_POST["yayin_tarihi"],
            "sayfa_sayisi" => $_POST["sayfa_sayisi"],
            "fiyat" => $_POST["fiyat"],
            "stok_sayisi" => $_POST["stok_sayisi"],
            "kitap_resim" => $_POST["kitap_resim"]


        )
    );
    if ($insert) {
        header("location:kitap.php?durum=yes");
    } else {
        header("location:kitap.php?durum=no");
    }
} else {
    echo "gelmediii";
}

if (isset($_POST["kitap-duzenle"])) {
    $duzenle = $baglanti->prepare("UPDATE kitap set
    
    kitap_ad=:kitap_ad,
    yazar_id=:yazar_id,
    yayinevi_id=:yayinevi_id,
    kategori_id=:kategori_id,
    yayin_tarihi=:yayin_tarihi,
    sayfa_sayisi=:sayfa_sayisi,
    fiyat=:fiyat,
    stok_sayisi=:stok_sayisi,
    kitap_resim=kitap_resim

    where kitap_id={$_POST["kitap_id"]}    
    ");
    $update = $duzenle->execute(
        array(
            "kitap_ad" => $_POST["kitap_ad"],
            "yazar_id" => $_POST["yazar_id"],
            "yayinevi_id" => $_POST["yayinevi_id"],
            "kategori_id" => $_POST["kategori_id"],
            "yayin_tarihi" => $_POST["yayin_tarihi"],
            "sayfa_sayisi" => $_POST["sayfa_sayisi"],
            "fiyat" => $_POST["fiyat"],
            "stok_sayisi" => $_POST["stok_sayisi"]
        )
    );
    if ($update) {
        header("location:kitap.php?durum=yes");
    } else {
        header("location:kitap.php?durum=no");
    }
} else {
    echo "gelmedii";
}

if (isset($_GET['kitapsil'])) {


    $sil = $baglanti->prepare("DELETE FROM kitap WHERE kitap_id=:kitap_id");

    $sil->execute(
        array(

            'kitap_id' => $_GET['kitap_id']

        )
    );


    if ($sil) {
        Header("location:kitap.php?durum=yes");
    } else {
        Header("location:kitap.php?durum=no");
    }


}
?>