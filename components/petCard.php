<div class="container mt-5">
    <div class="card card-custom">
        <div style="height: 12rem;"><img src="<?= $cssClass['resim'] ?>" class="card-img-top" alt="..."></div>
        <div class="card-body">
            <h5 class="card-title"><?= $cssClass['name'] ?></h5>
            <p class="card-text"><?= $cssClass['aciklama'] ?></p>
            <p class="t">Barınak: :<?= $cssClass['barinak'] ?> </p>
            <p class="t">Yas:<?= $cssClass['yas'] ?> </p>
            <p class="t">Cins:<?= $cssClass['cins'] ?> </p>


            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sahiplen">
                Sahiplen
            </button>
        </div>
    </div>
</div>




<!-- Modal -->
<div class="modal fade text-start" id="sahiplen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="./lib/sahiplenen_kayit.php/?path=<?= $cssClass['id'] ?>" method="POST">
                    <div class="mb-3">
                        <label for="ad" class="form-label">Ad</label>
                        <input type="text" class="form-control" name="ad" id="ad" required>
                        <div id="" class="form-text">Bütün Alanları Eksiksiz Doldurunuz!!</div>
                    </div>
                    <div class="mb-3">
                        <label for="soyad" class="form-label">Soyad</label>
                        <input type="text" class="form-control" name="soyad" id="soyad" required>
                    </div>
                    <div class="mb-3">
                        <label for="adres" class="form-label">Adres</label>
                        <input type="text" class="form-control" name="adres" id="adres" required>
                    </div>
                    <div class="mb-3">
                        <label for="telefon" class="form-label">Telefon Numarası</label>
                        <input type="number" class="form-control" name="telefon" id="telefon" required>
                    </div>
                    <div class="mb-3">
                        <label for="dogum_tarihi" class="form-label">Doğum Tarihi</label>
                        <input type="date" class="form-control" name="dogum_tarihi" id="dogum_tarihi" required>
                    </div>
                    <div class="mb-3">
                        <label for="meslek" class="form-label">Meslek</label>
                        <input type="text" class="form-control" name="meslek" id="meslek" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Gönder</button>
                </form>
            </div>
        </div>
    </div>
</div>