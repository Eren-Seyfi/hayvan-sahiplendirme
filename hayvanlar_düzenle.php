<?php
include "./lib/connect.php";
include "./components/head.php";
include "./components/admin_navbar.php";


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
<section class="container ">

  <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#hayvan_ekle">Hayvan Ekle</button>



  <!-- Modal -->
  <div class="modal fade" id="hayvan_ekle" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">

          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <form method="post" action="./lib/hayvanlar_ekle.php" enctype="multipart/form-data">


            <div class="mb-3">
              <label for="Hayvan_url" class="form-label">Hayvan Resim url si</label>
              <input type="text" name="img" class="form-control" id="Hayvan_url" aria-describedby="emailHelp" value="https://d2941uvtj8higz.cloudfront.net/uploads/2022/4/TaFQPw9hRId5r0yMD67Z4xDaNZS5w4GWziPuasF9.jpg">
            </div>

            <div class="mb-3">
              <label for="Hayvan_ismi" class="form-label">Hayvan ismi</label>
              <input type="text" name="name" class="form-control" id="Hayvan_ismi" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
              <label for="Açıklama" class="form-label">Açıklama</label>
              <input type="text" name="explanation" class="form-control" id="Açıklama" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
              <label for="Adres" class="form-label">Adres</label>
              <input type="text" name="address" class="form-control" id="Adres" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="cins" class="form-label">Cins</label>
              <input type="text" name="genus" class="form-control" id="Yaş" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
              <label for="Yaş" class="form-label">Yaş</label>
              <input type="number" name="age" class="form-control" id="Yaş" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
              <select class="form-select" name="type" aria-label="Hayvan Türü">
                <option selected>Hayvan Türü</option>
                <option value="köpek">Köpek</option>
                <option value="kedi">Kedi</option>
                <option value="balık">Balık</option>
                <option value="kuş">Kuş</option>
              </select>
            </div>


            <button type="submit" class="btn btn-primary">Ekle</button>

          </form>
        </div>

      </div>
    </div>
  </div>


</section>
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
            <?php include "./components/adminPetCard.php" ?>
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