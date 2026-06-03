<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "12345",
    "ifweekly"
);

echo "Database aktif: ";

$result = mysqli_query($conn, "SELECT DATABASE()");
$row = mysqli_fetch_row($result);

echo $row[0];
?>