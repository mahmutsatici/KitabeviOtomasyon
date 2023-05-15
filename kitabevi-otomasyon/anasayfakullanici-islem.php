<?php
// Diğer kodlar...

if (isset($_GET['siparisver']) && isset($_GET['kitap_id'])) {
    $kitap_id = $_GET['kitap_id'];

    // Siparişi veritabanına ekleyin

    // Diğer işlemler...

    header("Location: anasayfakullanici.php"); // Kullanıcıyı yönlendirin
    exit;
}
?>