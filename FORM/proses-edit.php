<?php

    include("koneksi.php");

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $role = $_POST['role'];
    $alamat = $_POST['alamat'];

    $query = "update users set nama = '$nama', email = '$email', phone = '$phone', role = '$role', alamat = '$alamat' where id = $id";
    
    if(mysqli_query($conn, $query)){
        header("Location: index.php");
    }else{
        header("Location: edit.php?id=$id");
    }

?>