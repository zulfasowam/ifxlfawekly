<?php

include 'koneksi.php';

$result = mysqli_query($conn, "SHOW COLUMNS FROM mahasiswa");

while($row = mysqli_fetch_assoc($result)){
    echo $row['Field'] . "<br>";
}