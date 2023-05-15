<?php
include "baglanti.php";
if (isset($_POST["yayinevi-ekle"])) {

    $kaydet = $baglanti->prepare("insert into yayinevi set
    
    
    yayinevi_ad=:yayinevi_ad,
    yayinevi_telno=:yayinevi_telno,
    site=:site
    
    ");
    $insert = $kaydet->execute(
        array(

            "yayinevi_ad" => $_POST["yayinevi_ad"],
            "yayinevi_telno" => $_POST["yayinevi_telno"],
            "site" => $_POST["site"]
        )
    );
    if ($insert) {
        header("location:yayinevi.php?durum=yes");
    } else {
        header("location:yayinevi.php?durum=no");
    }
} else {
    echo "gelmediii";
}

if (isset($_POST["yayinevi-duzenle"])) {
    $duzenle = $baglanti->prepare("UPDATE yayinevi set
    
    yayinevi_ad=:yayinevi_ad,
    yayinevi_telno=:yayinevi_telno,
    site=:site
    

    where yayinevi_id={$_POST["yayinevi_id"]}    
    ");
    $update = $duzenle->execute(
        array(
            "yayinevi_ad" => $_POST["yayinevi_ad"],
            "yayinevi_telno" => $_POST["yayinevi_telno"],
            "site" => $_POST["site"]
        )
    );
    if ($update) {
        header("location:yayinevi.php?durum=yes");
    } else {
        header("location:yayinevi.php?durum=no");
    }
} else {
    echo "gelmedii";
}

if (isset($_GET['yayinevisil'])) {


    $sil = $baglanti->prepare("DELETE FROM yayinevi WHERE yayinevi_id=:yayinevi_id");

    $sil->execute(
        array(

            'yayinevi_id' => $_GET['yayinevi_id']

        )
    );


    if ($sil) {
        Header("location:yayinevi.php?durum=yes");
    } else {
        Header("location:yayinevi.php?durum=no");
    }


}
?>