<?php

$dbHost = 'localhost';
$dbName = 'arkademy';
$dbUsername = 'root';
$dbpassword = '';

$conn = mysqli_connect ($dbHost, $dbUsername, $dbpassword, $dbName);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil";
?>