<?php
// Tam yolu kullanarak dosya dahil etme
include($_SERVER['DOCUMENT_ROOT'] . "/hayvan_sahiplendirme/lib/connect.php");

// Form verilerini al
$ad = $_POST['ad'];
$soyad = $_POST['soyad'];
$adres = $_POST['adres'];
$telefon = $_POST['telefon'];
$dogum_tarihi = $_POST['dogum_tarihi'];
$meslek = $_POST['meslek'];
$hayvan_id = $_GET['path'];


$sql = "INSERT INTO sahiplenen_kayit (ad, soyad, adres, telefon, dogum_tarihi, meslek,hayvan) VALUES ('$ad', '$soyad', '$adres', '$telefon', '$dogum_tarihi', '$meslek','$hayvan_id')";

if (mysqli_query($conn, $sql)) {
    echo "Kayıt başarıyla eklendi!";
} else {
    echo "Hata: " . $sql . "<br>" . mysqli_error($conn);
}

// Bağlantıyı kapat
mysqli_close($conn);
