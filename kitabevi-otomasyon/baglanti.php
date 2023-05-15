<?php
try {
    $baglanti = new PDO("mysql:host=localhost; dbname=kitabeviotomasyon", "root", "");
    #echo "bağlandın";

} catch (\Throwable $th) {
    echo $e->getMessage();
}

?>