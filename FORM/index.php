<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<?php
    include ("koneksi.php");

    $query = "select * from users";
    $hasil = mysqli_query($conn, $query);
?>
    
    <h1> Tambah User </h1>
    <form action="proses_insert.php" method="POST">
        ID : <input type="text" name="id_user" value=""><br/>
        Nama : <input type="text" name="nama" value=""><br/>
        Email : <input type="text" name="email" value=""><br/>
        Phone : <input type="text" name="phone" value=""><br/>
        Role : <input type="text" name="role" value=""><br/>
        Alamat : <textarea name="alamat"></textarea><br/>
        <input type="submit" value="Simpan">
    </form>
    
    <h1> Tabel User </h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Role</th>
            <th>Alamat</th>
            <th colspan="2">Tindakan</th>
        </tr>
        <?php
        while($row = mysqli_fetch_array($hasil)){
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['nama']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['phone']."</td>";
            echo "<td>".$row['role']."</td>";
            echo "<td>".$row['alamat']."</td>";
            echo "<td><a href='edit.php?id=".$row['id']."'>Ubah</a></td>";
            echo "<td><a href='delete.php?id=".$row['id']."'>Hapus</a></td>";
            echo "</tr>";
        }
        ?>  
    </table>

</body>
</html>