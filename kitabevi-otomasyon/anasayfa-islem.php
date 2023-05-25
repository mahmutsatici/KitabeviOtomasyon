<?php
include "baglanti.php";
if (isset($_GET['siparisver']) && isset($_GET['kitap_id'])) {
    $kitap_id = $_GET['kitap_id'];
    $kullanici_id = rand(1, 100); // Rastgele bir kullanıcı ID oluşturulabilir
    $odeme_yontemi = "kart";
    $siparis_durum = "";
    $siparis_tarih = "Haziran 2023";

    // Kitap fiyatını almak için kitap tablosundan sorgu yapılır
    $kitap_sorgu = "SELECT fiyat FROM kitap WHERE kitap_id = $kitap_id";
    $kitap_sonuc = $conn->query($kitap_sorgu);
    if ($kitap_sonuc->num_rows > 0) {
        $kitap = $kitap_sonuc->fetch_assoc();
        $toplam_tutar = $kitap['fiyat'];
    } else {
        echo "Kitap bulunamadı";
        exit;
    }

    // Sipariş tablosuna yeni kayıt eklenir
    $siparis_ekle = "INSERT INTO siparis (kitap_id, kullanici_id, odeme_yontemi, siparis_durum, siparis_tarih, toplam_tutar)
                     VALUES ($kitap_id, $kullanici_id, '$odeme_yontemi', '$siparis_durum', '$siparis_tarih', $toplam_tutar)";

    if ($conn->query($siparis_ekle) === TRUE) {
        header("location:anasayfakullanici.php?durum=yesss");
    }
}


?>