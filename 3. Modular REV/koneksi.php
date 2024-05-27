<?php

// **Informasi database**
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "dpw1crudr";

// **Membuat koneksi**
$donut = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

// **Mengecek koneksi**
if (!$donut) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi berhasil!";
}
