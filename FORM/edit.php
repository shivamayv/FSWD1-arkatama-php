<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

    <?php
        include ("koneksi.php");
        $id = $_GET['id'];

        $query = "select * from users where id = $id";
        $hasil = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($hasil);
    ?>
    <h1>Edit Data</h1>
    <form action="proses-edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        Nama : <input type="text" name="nama" value="<?php echo $row['nama']; ?>"><br/>
        Email : <input type="text" name="email" value="<?php echo $row['email']; ?>"><br/>
        Phone : <input type="text" name="phone" value="<?php echo $row['phone']; ?>"><br/>
        Role : <input type="text" name="role" value="<?php echo $row['role']; ?>"><br/>
        Alamat : <textarea name="alamat"><?php echo $row['alamat']; ?></textarea><br/>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>