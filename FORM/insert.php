<?php

    include("koneksi.php");

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $role = $_POST['role'];
    $alamat = $_POST['alamat'];
    $id = $_POST['id'];

    $query = "insert into users values ('', '$nama', '$email', '$phone', '$role', '$alamat', $id)";
    
    if(mysqli_query($conn, $query)){
        header("Location: index.php");
    }else{
        header("Location: edit.php?id=$id");
    }

?>