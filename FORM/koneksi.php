<?php
// Konfigurasi database
$host = "localhost";
$user = "root";
$password = "1234";
$database = "arkatama_store";

// Membuat koneksi ke database
$conn = mysqli_connect($host, $user, $password, $database);

// Cek koneksi
if (!$conn) {
    die('Koneksi database gagal: ' . mysqli_connect_error());
}else{
    echo "Koneksi sukses";
}
?>