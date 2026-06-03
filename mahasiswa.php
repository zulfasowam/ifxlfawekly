<?php
include 'koneksi.php';

$data = mysqli_query($conn, "SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="css/mahasiswa.css">
</head>
<body>

<div class="container">

    <h1>Profil & Data Mahasiswa</h1>

    <table class="nav-table">
        <tr>
            <td><a href="index.php">Home</a></td>
            <td><a href="Profile.php">Profile</a></td>
            <td><a href="Contact.php">Contact</a></td>
            <td><a href="mahasiswa.php" class="active">Data Mahasiswa</a></td>
        </tr>
    </table>

    <div class="action-section">
        <h2>Data Mahasiswa</h2>

        <a href="inputdata.php">
            <button class="btn-primary">
                Input Data Baru
            </button>
        </a>
    </div>

    <table class="data-table">

        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jurusan</th>
                <th>Email</th>
                <th>No HP</th>
                <th>Foto</th>
            </tr>
        </thead>

        <tbody>

            <?php
            $no = 1;

            while($row = mysqli_fetch_assoc($data)){
            ?>

            <tr>

                <td class="text-center">
                    <?= $no++; ?>
                </td>

                <td>
                    <?= $row['nama']; ?>
                </td>

                <td class="text-center">
                    <?= $row['nim']; ?>
                </td>

                <td>
                    <?= $row['jurusan']; ?>
                </td>

                <td>
                    <?= $row['email']; ?>
                </td>

                <td>
                    <?= $row['no_hp']; ?>
                </td>

                <td class="text-center">

                    <?php if(!empty($row['foto'])) { ?>

                        <img
                            src="uploads/<?= $row['foto']; ?>"
                            alt="Foto Mahasiswa"
                            class="student-photo"
                            width="80">

                    <?php } else { ?>

                        Tidak Ada Foto

                    <?php } ?>

                </td>

            </tr>

            <?php } ?>

        </tbody>

    </table>

    <hr class="divider">

    <h2>Tabel Grid Dasar</h2>

    <table class="grid-table">
        <tr>
            <td>1,1</td>
            <td>1,2</td>
            <td>1,3</td>
            <td>1,4</td>
        </tr>

        <tr>
            <td>2,1</td>
            <td colspan="2" rowspan="2" class="highlight-cell">?</td>
            <td>2,4</td>
        </tr>

        <tr>
            <td>3,1</td>
            <td>3,4</td>
        </tr>

        <tr>
            <td>4,1</td>
            <td>4,2</td>
            <td>4,3</td>
            <td>4,4</td>
        </tr>
    </table>

</div>

</body>
</html>