<?php
include "baglanti.php";

if (isset($_GET['siparisver']) && isset($_GET['kitap_id'])) {
    $kitap_id = $_GET['kitap_id'];
    $kullanici_id = rand(1, 10); // Rastgele bir kullanıcı ID oluşturulabilir
    $odeme_yontemi = "kart";
    $siparis_durum = "";
    $siparis_tarih = "Haziran 2023";

    // Kitap fiyatını almak için kitap tablosundan sorgu yapılır
    $kitap_sorgu = "SELECT fiyat FROM kitap WHERE kitap_id = :kitap_id";
    $kitap_stmt = $baglanti->prepare($kitap_sorgu);
    $kitap_stmt->bindParam(':kitap_id', $kitap_id);
    $kitap_stmt->execute();

    if ($kitap_stmt->rowCount() > 0) {
        $kitap = $kitap_stmt->fetch(PDO::FETCH_ASSOC);
        $toplam_tutar = $kitap['fiyat'];

        // Sipariş tablosuna yeni kayıt eklenir
        $siparis_ekle = "INSERT INTO siparis (kitap_id, kullanici_id, odeme_yontemi, siparis_durum, siparis_tarih, toplam_tutar)
                         VALUES (:kitap_id, :kullanici_id, :odeme_yontemi, :siparis_durum, :siparis_tarih, :toplam_tutar)";

        $siparis_stmt = $baglanti->prepare($siparis_ekle);
        $siparis_stmt->bindParam(':kitap_id', $kitap_id);
        $siparis_stmt->bindParam(':kullanici_id', $kullanici_id);
        $siparis_stmt->bindParam(':odeme_yontemi', $odeme_yontemi);
        $siparis_stmt->bindParam(':siparis_durum', $siparis_durum);
        $siparis_stmt->bindParam(':siparis_tarih', $siparis_tarih);
        $siparis_stmt->bindParam(':toplam_tutar', $toplam_tutar);

        if ($siparis_stmt->execute()) {
            header("Location: anasayfakullanici.php?durum=yesss");
            exit;
        } else {
            echo "Sipariş verme hatası";
        }
    } else {
        echo "Kitap bulunamadı";
    }
}

?>