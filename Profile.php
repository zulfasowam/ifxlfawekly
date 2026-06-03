<?php

$nama = "Zulfa Sowam";
$role = "Mahasiswa Teknik Informatika - UNIMUS '24";

$bio1 = "Halo semuanya! Kenalin, aku Zulfa Sowam, mahasiswa Informatika Universitas Muhammadiyah Semarang (UNIMUS) angkatan 2024. Website ini sebenarnya berawal dari ruang personal buat ngulik-ngulik kode dan belajar hal baru. Tapi, aku harap tulisan dan project sederhana yang aku bagikan di sini juga bisa jadi referensi dan membantu teman-teman semua.";

$bio2 = "Buat kalian yang juga lagi sama-sama berjuang—entah itu belajar ngoding, ngerjain tugas, atau ngejar mimpi—tetap semangat! Proses belajar memang kadang banyak error-nya, tapi justru di situlah kita bertumbuh. Keep learning and let's grow together!";

$instagram = "https://instagram.com/zlfaswm";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Kreator - Jurnal Informatika</title>
    <link rel="stylesheet" href="CSS/profil.css">
</head>
<body>

<div class="container">

    <header class="site-header">
        <h1>Tentang Pembuat</h1>
        <p>Berkenalan lebih dekat dengan sosok di balik website ini.</p>
    </header>

    <nav class="site-nav">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="Profile.php" class="active">Profile</a></li>
            <li><a href="Contact.php">Contact</a></li>
            <li><a href="mahasiswa.php">Data Mahasiswa</a></li>
        </ul>
    </nav>

    <main class="site-content">

        <div class="profile-card">

            <div class="profile-image-section">
                <img
                    src="Images/GSA.jpeg"
                    alt="Foto Profil"
                    class="profile-img">
            </div>

            <div class="profile-info-section">

                <h2><?= $nama; ?></h2>

                <h4 class="profile-role">
                    <?= $role; ?>
                </h4>

                <div class="profile-bio">

                    <p>
                        <?= $bio1; ?>
                    </p>

                    <p>
                        <?= $bio2; ?>
                    </p>

                </div>

                <div class="social-links">

                    <a
                        href="<?= $instagram; ?>"
                        target="_blank"
                        class="btn-instagram">

                        Mari Berteman di Instagram

                    </a>

                </div>

            </div>

        </div>

    </main>

    <footer class="site-footer">
        <p>&copy; <?= date("Y"); ?> Portal Unimus.</p>
    </footer>

</div>

</body>
</html>