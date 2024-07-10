<?php
include("./lib/connect.php");
include("./components/head.php");
include("./components/navbar.php");

?>

<section>
  <div id="carouselExampleIndicators" class="carousel slide h-100 w-100">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://www.positivetomorrows.org/wp-content/uploads/IMG_7609-1-scaled-e1658418314210-800x300.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://www.streathamhillvets.co.uk/wp-content/uploads/2023/12/XL-bully-ban-blog-banner_updated-800x300.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://www.streathamhillvets.co.uk/wp-content/uploads/2024/05/Microchipping-Month-800x300.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>
<br />
<br />

<section class="container text-center">
  <div class="row row-cols-1 row-cols-md-3 gx-1 gy-2">
    
    <?php
    // Dizi, her biri 'name' ve 'aciklama' anahtarlarına sahip olan elemanlardan oluşuyor.
    $array = [
      ["name" => "Kedi", "aciklama" => "Kedi sahiplenmek için tıklayınız", "tür" => "kedi", "resim" => "https://www.medicalpark.com.tr/_uploads/_images/_healthGuide/RmWKPNAr.jpg"],
      ["name" => "Köpek ", "aciklama" => "Köpek sahiplenmek için tıklayınız", "tür" => "köpek", "resim" => "https://ankaravetrium.com/storage/app/media/Blog/Toy%20Poodle%20K%C3%B6pek%20Cinsi%20%C3%96zellikleri%20ve%20Bak%C4%B1m%C4%B1/%C3%A7imende-duran-toy-puddle.jpg"],
      ["name" => "Kuş", "aciklama" => "Kuş sahiplenmek için tıklayınız", "tür" => "kuş", "resim" => "https://www.loulou.com.tr/wp-content/uploads/2016/11/papagan-loulou-480x480.png"],
      ["name" => "Balık", "aciklama" => "Balık sahiplenmek için tıklayınız", "tür" => "balık", "resim" => "https://www.patiliyo.com/wpuploads/2017/07/beta-baligi.jpg"],
    ];
    ?>

    <?php
    // Dizi boşalana kadar her bir elemanı döngü ile alıyoruz.  ASIL AMAÇ TEKRARLI BİR ŞEKİLDE ECHO YAZ MAMAK
    while ($cssClass = array_pop($array)) {
      // Her eleman için HTML içeriği dinamik olarak oluşturuluyor.
    ?>
      <div class="col">
        <div class="card card-custom">
          <img src="<?= $cssClass['resim'] ?>" class="card-img-top" alt="<?= $cssClass['name'] ?>" />
          <div class="card-body">
            <h5 class="card-title"><?= $cssClass['name'] ?></h5>
            <p class="card-text"><?= $cssClass['aciklama'] ?></p>
            <a href="/hayvan_sahiplendirme/hayvanlar.php?tür=<?= $cssClass['tür'] ?>" class="btn btn-outline-success">Göster</a>
          </div>
        </div>
      </div>
    <?php
    }
    ?>

  </div>
</section>

<?php
include("./components/footer.php");
?>
