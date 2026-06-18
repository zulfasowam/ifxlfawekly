<?php
$pesanSukses = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $pesan = htmlspecialchars($_POST['pesan']);

    $pesanSukses = "Terima kasih kak $nama, pesan Anda telah diterima.";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami</title>
    <link rel="stylesheet" href="CSS/contact.css">
</head>
<body>

<div class="container">

    <header class="site-header">
        <h1>Hubungi Kami</h1>
        <p>Silakan isi formulir di bawah ini atau hubungi kami melalui informasi kontak yang tersedia.</p>
    </header>

    <nav class="site-nav">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="Profile.php">Profile</a></li>
            <li><a href="Contact.php" class="active">Contact</a></li>
            <li><a href="mahasiswa.php">Data Mahasiswa</a></li>
        </ul>
    </nav>

    <main class="site-content">

        <?php if (!empty($pesanSukses)) : ?>
            <div style="background:#d4edda;padding:10px;margin-bottom:15px;border-radius:5px;">
                <?= $pesanSukses ?>
            </div>
        <?php endif; ?>

        <div class="contact-wrapper">

            <section class="contact-info">
                <h2>Informasi Kontak</h2>

                <ul class="info-list">
                    <li>
                        <strong>Alamat:</strong><br>
                        Jl. Kedungmundu Raya No. 18 Semarang
                    </li>

                    <li>
                        <strong>Email:</strong><br>
                        info@unimus.ac.id
                    </li>

                    <li>
                        <strong>Telepon:</strong><br>
                        (024) 7674029, 76740297, 76740293
                    </li>
                </ul>
            </section>

            <section class="contact-form">

                <h2>Kirim Pesan</h2>

                <form method="POST">

                    <div class="form-group">
                        <label for="nama">Nama Lengkap:</label>

                        <input
                            type="text"
                            id="nama"
                            name="nama"
                            placeholder="Masukkan nama lengkap Panjenengan"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="email">Alamat Email:</label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="contoh@email.com"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="pesan">Pesan Anda:</label>

                        <textarea
                            id="pesan"
                            name="pesan"
                            rows="5"
                            placeholder="Tuliskan pesan atau pertanyaan Anda di sini..."
                            required></textarea>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn-submit">
                            Kirim Pesan
                        </button>

                        <button type="reset" class="btn-reset">
                            Hapus Isian
                        </button>
                    </div>

                </form>

            </section>

        </div>

    </main>

    <footer class="site-footer">
        <p>&copy; <?= date("Y"); ?> Website Saya.</p>
    </footer>

</div>

</body>
</html>