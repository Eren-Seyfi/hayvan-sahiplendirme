<?php
include("./lib/connect.php");
include("./components/head.php");
include("./components/navbar.php");

// $_GET dizisinde 'tür' anahtarının var olup olmadığını kontrol edin
$tür = isset($_GET["tür"]) ? $_GET["tür"] : '';

// Veritabanından hayvan bilgilerini çekme
if ($tür) {
    $stmt = $conn->prepare("SELECT * FROM `hayvanlar` WHERE `tür` = ?");
    $stmt->bind_param("s", $tür);
} else {
    $stmt = $conn->prepare("SELECT * FROM `hayvanlar`");
}

$stmt->execute();
$result = $stmt->get_result();

?>

<br />
<br />

<section class="container text-center">
  <div class="row row-cols-1 row-cols-md-3 gx-1 gy-2">

    <?php
    if ($result->num_rows > 0) {
      // Veritabanından gelen verileri işleyin
      while ($row = $result->fetch_assoc()) {
        $cssClass = [
          'id' => $row['id'],
          'name' => $row['ad'],
          'aciklama' => $row['açiklama'],
          'resim' => $row['resim'],
          "barinak" => $row["barinak"],
          'cins' => $row["cins"],
          'yas' => $row["yas"]

        ];
    ?>

        <div class="col">
          <div class="">
            <?php include "./components/petCard.php" ?>
          </div>
        </div>

    <?php
      }
    } else {
      echo "Hiç veri bulunamadı.";
    }

    // Bağlantıyı kapat
    $stmt->close();
    mysqli_close($conn);
    ?>

  </div>
</section>

<?php
include("./components/footer.php");
?>
