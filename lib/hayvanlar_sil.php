<?php
include "connect.php";


$id = $_GET['id'];

$sql = "DELETE FROM `hayvanlar` WHERE id = '$id'";

$result = mysqli_query($conn, $sql);

if ($result) {
    header("Location: /hayvan_sahiplendirme/hayvanlar_düzenle.php");
} else {
    echo "Hata: " . $sql . "<br>" . mysqli_error($conn);
}
