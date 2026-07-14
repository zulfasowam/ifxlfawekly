<?php
$judul = "Portal Zulfa - Home";
$namaKampus = "Universitas Muhammadiyah Semarang";
$alamat = "Jl. Kedungmundu Raya No. 18 Semarang";
$akreditasi = "UNGGUL";

// Mengubah array menjadi Associative Array (Nama Prodi => Link URL)
$prodi = [
    "Informatika" => "https://informatika.unimus.ac.id/", // Contoh link resmi
    "Teknologi Informasi" => "https://ti.unimus.ac.id/",
    "Sains Data" => "https://sainsdata.unimus.ac.id/home-2/",
    "Cyber Security" => "https://rks.unimus.ac.id/",
    "DKV" => "https://dkv.unimus.ac.id/"
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judul ?></title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>

<div class="container">

    <header class="site-header">
        <h1>Profil Portal Unimus</h1>
        <p>Selamat Datang di Halaman Beranda Utama</p>
    </header>

    <nav class="site-nav">
        <ul>
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="Profile.php">Profile</a></li>
            <li><a href="Contact.php">Contact</a></li>
            <li><a href="mahasiswa.php">Data Mahasiswa</a></li>
            <!--  Tambahan Menu Register//  -->
            <li><a href="register.php" style="background-color: #28a745; color: white;">Register</a></li>
        </ul>
    </nav>

    <main class="site-content">
        <div class="home-card">

            <h2><?= $namaKampus ?></h2>

            <img src="Images/Unimus.jpg"
                 alt="Kampus Unimus"
                 class="hero-image">

            <div class="info-section">
                <p>
                    <strong>Nama Kampus :</strong> <?= $namaKampus ?><br>
                    <strong>Alamat :</strong> <?= $alamat ?><br>
                    <strong>Akreditasi :</strong> <?= $akreditasi ?>
                </p>
            </div>

            <h3>Daftar Program Studi Fakultas Ilmu Komputer</h3>

            <ul class="prodi-list">
                <?php foreach($prodi as $p) { ?>
                    <li><?= $p ?></li>
                <?php } ?>
            </ul>

        </div>
    </main>

    <footer class="site-footer">
        <p>&copy; <?= date("Y") ?> Portal Unimus.</p>
    </footer>

</div>

</body>
</html>