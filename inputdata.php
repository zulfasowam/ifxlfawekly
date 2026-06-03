<?php

include 'koneksi.php';

if(isset($_POST['simpan'])){

    $nama    = $_POST['nama'];
    $nim     = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $email   = $_POST['email'];
    $no_hp   = $_POST['no_hp'];

    $namaFoto = $_FILES['foto']['name'];
    $tmpFoto  = $_FILES['foto']['tmp_name'];

    if(!is_dir("uploads")){
        mkdir("uploads");
    }

    move_uploaded_file(
        $tmpFoto,
        "uploads/" . $namaFoto
    );

    $sql = "INSERT INTO mahasiswa
            (nama,nim,jurusan,email,no_hp,foto)
            VALUES
            ('$nama','$nim','$jurusan','$email','$no_hp','$namaFoto')";

    mysqli_query($conn, $sql);

    header("Location: mahasiswa.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>

    <link rel="stylesheet" href="CSS/inputdata.css">
</head>
<body class="page-input-data">

<div class="centered-container">

    <div class="top-nav-center">
        <a href="index.php" class="btn-home">
            🏠 Kembali ke Home
        </a>
    </div>

    <div class="input-data-card">

        <div class="card-header">
            <h2>Formulir Input Data Mahasiswa</h2>
            <p>Masukkan data mahasiswa ke dalam sistem.</p>
        </div>

        <form method="POST" enctype="multipart/form-data">

            <!-- Nama -->

            <div class="form-group-input">
                <label>Nama Lengkap</label>

                <input
                    type="text"
                    name="nama"
                    placeholder="Masukkan nama mahasiswa"
                    required>
            </div>

            <!-- NIM -->

            <div class="form-group-input">
                <label>NIM</label>

                <input
                    type="text"
                    name="nim"
                    placeholder="Contoh: G.211.24.0001"
                    required>
            </div>

            <!-- Jurusan -->

            <div class="form-group-input">
                <label>Jurusan</label>

                <select name="jurusan" required>

                    <option value="">
                        -- Pilih Jurusan --
                    </option>

                    <option value="Informatika">
                        Informatika
                    </option>

                    <option value="Teknologi Informasi">
                        Teknologi Informasi
                    </option>

                    <option value="Sains Data">
                        Sains Data
                    </option>

                    <option value="Cyber Security">
                        Cyber Security
                    </option>

                    <option value="DKV">
                        DKV
                    </option>

                </select>
            </div>

            <!-- Email -->

            <div class="form-group-input">
                <label>Email</label>

                <input
                    type="email"
                    name="email"
                    placeholder="contoh@email.com"
                    required>
            </div>

            <!-- No HP -->

            <div class="form-group-input">
                <label>Nomor HP</label>

                <input
                    type="text"
                    name="no_hp"
                    placeholder="08xxxxxxxxxx"
                    required>
            </div>

            <!-- Foto -->

            <div class="form-group-input">
                <label>Upload Foto</label>

                <input
                    type="file"
                    name="foto"
                    accept="image/*"
                    required>
            </div>

            <!-- Tombol -->

            <div class="form-actions-input">

                <button
                    type="submit"
                    name="simpan"
                    class="btn-submit">

                    Simpan Data

                </button>

                <a
                    href="mahasiswa.php"
                    class="btn-reset">

                    Batal

                </a>

            </div>

        </form>

    </div>

</div>

</body>
</html>