<div class="container mt-5">
    <div class="card card-custom">
        <div style="height: 12rem;"><img src="<?= $cssClass['resim'] ?>" class="card-img-top" alt="..."></div>
        <div class="card-body">
            <h5 class="card-title"><?= $cssClass['name'] ?></h5>
            <p class="card-text"><?= $cssClass['aciklama'] ?></p>
            <p class="t">Barınak: :<?= $cssClass['barinak'] ?> </p>
            <p class="t">Yas:<?= $cssClass['yas'] ?> </p>
            <p class="t">Cins:<?= $cssClass['cins'] ?> </p>


            <a href="/hayvan_sahiplendirme/lib/hayvanlar_sil.php/?id=<?= $cssClass['id'] ?>" type="button" class="btn btn-danger">Sil</a>
            <br>
            <div class="alert alert-info" role="alert">
                Hayvan Numarası: <?= $cssClass['id'] ?>
            </div>
        </div>
    </div>
</div>