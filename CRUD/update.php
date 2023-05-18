<?php
// Koneksi ke database
require_once 'koneksi.php';

// Ambil data dari form
$id = $_POST['id'];
$categoryid = $_POST['category_id'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$status = $_POST['status'];
$created_at = $_POST['created_at'];
$updated_at = $_POST['updated_at'];
$created_by = $_POST['created_by'];
$verified_at = $_POST['verified_at'];
$verified_by = $_POST['verified_by'];

// Query untuk mengubah data
$query = "UPDATE products SET category_id='$category_id', name='$name', description='$description', price='$price', status='$status', created_at='$created_at', updated_at='$updated_at', created_by='$created_by', verified_at='$verified_at', verified_by='$verified_by' WHERE id=$id";

// Eksekusi query
if (mysqli_query($conn, "SELECT * FROM products", MYSQLI_STORE_RESULT)) {
    echo 'Data berhasil diubah';
} else {
    echo 'Error: ' . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
?>
