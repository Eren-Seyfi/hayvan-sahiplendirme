<?php
include "connect.php";

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Veritabanı bağlantısında hata: " . $conn->connect_error);
}

// Formdan gelen verileri al
$name = $_POST['name'];
$type = $_POST['type'];
$img = $_POST['img'];
$genus = $_POST['genus'];
$age = $_POST['age'];
$explanation = $_POST['explanation'];
$address = $_POST['address'];


// SQL sorgusu ile veritabanına ekleme işlemi
$sql = "INSERT INTO hayvanlar (ad, tür, cins, yas, açiklama, resim, barinak)
  VALUES ('$name', '$type', '$genus', '$age', '$explanation', '$img', '$address')";

if ($conn->query($sql) === TRUE) {
    echo "Yeni kayıt başarıyla eklendi.";
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}

// Veritabanı bağlantısını kapat
$conn->close();
