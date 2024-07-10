<?php
include "./lib/connect.php";
include "./components/head.php";
include "./components/admin_navbar.php";


$sql = "SELECT * FROM `sahiplenen_kayit`";
$result = $conn->query($sql);

?>
<br />


<section class="container text-center">

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Ad</th>
        <th scope="col">Soyad</th>
        <th scope="col">Adres</th>
        <th scope="col">Telefon</th>
        <th scope="col">Doğum Tarihi</th>
        <th scope="col">Meslek</th>
        <th scope="col">Hayvan Numarası</th>
      </tr>
    </thead>
    <tbody>

      <?php
      if ($result->num_rows > 0) {
        // Veritabanından gelen verileri işleyin
        while ($row = $result->fetch_assoc()) {
          $cssClass = [
            'id' => $row['id'],
            'ad' => $row['ad'],
            'soyad' => $row['soyad'],
            'adres' => $row['adres'],
            'telefon' => $row['telefon'],
            "dogum_tarihi" => $row["dogum_tarihi"],
            'meslek' => $row["meslek"],
            'hayvan' => $row["hayvan"]

          ];
      ?>

          <?php include "./components/adminSahiplenenler.php" ?>

      <?php
        }
      } else {
        echo "Hiç veri bulunamadı.";
      }

      // Bağlantıyı kapat
      $result->close();
      mysqli_close($conn);
      ?>
    </tbody>
  </table>
  </div>
</section>



<?php
include("./components/footer.php");
?>