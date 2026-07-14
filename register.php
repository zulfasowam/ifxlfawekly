<?php
// Logika PHP sederhana untuk menangkap data register (hanya simulasi)
$pesanRegister = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $namaLengkap = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    
    // Simulasi sukses mendaftar
    $pesanRegister = "Selamat $namaLengkap, akun dengan email $email berhasil didaftarkan!";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Akun Baru</title>
    <!-- Menghubungkan ke file CSS eksternal -->
    <link rel="stylesheet" href="register.css">
</head>
<body class="page-register">

    <div class="register-container">
        
        <!-- Pesan Sukses -->
        <?php if (!empty($pesanRegister)) : ?>
            <div class="alert-success">
                <?= $pesanRegister ?>
            </div>
        <?php endif; ?>

        <div class="register-header">
            <h2>Buat Akun Baru</h2>
            <p>Bergabunglah dengan portal kami.</p>
        </div>

        <form method="POST">
            <div class="form-group-register">
                <label for="nama">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda" required>
            </div>

            <div class="form-group-register">
                <label for="email">Alamat Email</label>
                <input type="email" id="email" name="email" placeholder="email@contoh.com" required>
            </div>

            <div class="form-group-register">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Buat password kuat" required>
            </div>

            <button type="submit" class="btn-register">Daftar Sekarang</button>
        </form>

        <div class="login-link">
            Sudah punya akun? <a href="#">Login di sini</a> <br><br>
            <a href="index.php">← Kembali ke Beranda</a>
        </div>

    </div>

</body>
</html>