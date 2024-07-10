<?php
include "./lib/connect.php"; // Veritabanı bağlantısı için gerekli dosya

// Formdan gelen verileri al
$ad = isset($_POST['ad']) ? $_POST['ad'] : '';
$sifre = isset($_POST['sifre']) ? $_POST['sifre'] : '';

// Hata ayıklama çıktıları
echo "Ad: $ad<br>";
echo "Şifre: $sifre<br>";

if ($ad != '' && $sifre != '') {
    // SQL sorgusunu hazırlıyoruz, ad ve şifre için yer tutucular ile
    $sorgu = $conn->prepare('SELECT k.id, k.ad, k.soyad, k.sifre, r.rol 
                             FROM kullanıcılar k 
                             JOIN rol r ON k.rol = r.id 
                             WHERE k.ad = ? AND k.sifre = ?');

    if ($sorgu) {
        // Ad ve şifre parametrelerini bağlıyoruz
        $sorgu->bind_param('ss', $ad, $sifre);
        // Sorguyu çalıştırıyoruz
        $sorgu->execute();
        // Sonucu alıyoruz
        $result = $sorgu->get_result();

        // Kullanıcı bulunup bulunmadığını kontrol ediyoruz
        if ($result->num_rows > 0) {
            // Kullanıcı verilerini alıyoruz
            $user = $result->fetch_assoc();

            // Oturumu başlatıp kullanıcı bilgilerini saklıyoruz
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['ad'];
            $_SESSION['user_role'] = $user['rol'];

            // Kullanıcıyı dashboard veya kullanıcı alanına yönlendiriyoruz
            header("Location: /hayvan_sahiplendirme/kontrol.php");
        } else {
            // Kullanıcı bulunamadıysa veya şifre yanlışsa, hata ile giriş sayfasına yönlendir
            echo "Geçersiz kullanıcı adı veya şifre.";
            // header("Location:/hayvan_sahiplendirme");
        }

        // Sorguyu ve bağlantıyı kapatıyoruz
        $sorgu->close();
    } else {
        // Sorgu hazırlanırken bir hata oluştu
        echo "Sorgu hazırlanırken bir hata oluştu.";
    }
    $conn->close();
} else {
    // Ad veya şifre boş ise giriş sayfasına yönlendir
    echo "Lütfen tüm alanları doldurun.";
    // header("Location: /hayvan_sahiplendirme");
}
