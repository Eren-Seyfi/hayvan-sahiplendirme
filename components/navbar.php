<nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container">
        <a class="navbar-brand fs-2 fw-bold fst-italic" href="/hayvan_sahiplendirme"
          ><span class="text-success">Şahin</span> PetShop</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a
                class="nav-link nav_btn_hover fs-5 fw-medium text-gray"
                aria-current="page"
                href="/hayvan_sahiplendirme"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link nav_btn_hover fs-5 fw-medium" href="hakkımızda.php/hayvan_sahiplendirme.php"
                >Hakkımızda</a
              >
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle nav_btn_hover fs-5 fw-medium"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Dostlarımız
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="hayvanlar.php?tür=kedi">Kedi</a></li>
                <li><a class="dropdown-item" href="hayvanlar.php?tür=köpek">Köpek</a></li>
                <li><a class="dropdown-item" href="hayvanlar.php?tür=kuş">Kuş</a></li>
                <li><a class="dropdown-item" href="hayvanlar.php?tür=balık">Balık</a></li>

              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link nav_btn_hover fs-5 fw-medium" href="iletişim.php"
                >İletişim</a
              >
            </li>
          </ul>
        </div>
        <?php


    if (isset($_SESSION["user_id"])) {
      // Kullanıcı oturum açmışsa, herhangi bir şey yapmadan devam eder
      echo '<a href="./kontrol.php" class="btn btn-outline-success">Yetkili Sayfası</a>';
    } else {
      // Kullanıcı oturum açmamışsa, giriş yap butonunu gösterir
      echo '<button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#login">
              Giriş Yap
          </button>';
    }
    ?>
      </div>
      <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Yetkili Girişi</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <form method="post" action="./login.php">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Ad</label>
                <input type="text" value="Şahin" name="ad" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

              </div>

              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Şifre</label>
                <input type="password" value="1234" name="sifre" class="form-control" id="exampleInputPassword1">
              </div>

              <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary w-100">Giriş</button>
              </div>

            </form>
          </div>

        </div>
      </div>
    </div>
    </nav>