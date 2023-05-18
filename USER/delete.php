<?php
    include 'koneksi.php';

    $name = $_GET['name'];
    $sqlDelete = "DELETE FROM users WHERE id=$id";
    mysqli_query($conn, $sqlDelete);

    header("location: index.php");
?>