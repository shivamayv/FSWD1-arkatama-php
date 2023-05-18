<?php
    include 'koneksi.php';

    $id = $_GET['id'];
    $sqlGet = "SELECT * FROM users WHERE id=$id";
    $queryGet = mysqli_query($conn, $sqlGet);
    $data = mysqli_fetch_array($queryGet);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Tambah User</title>
</head>
<body>
    <div class="w-50 mx-auto border p-3 mt-5">
        <a href="index.php" class="btn btn-primary mt-3">Kembali</a>
        <form action="update.php" method="post" class="mt-3">
            <label for="id">ID</label>
            <input type="text" id="id" name="id" value="<?php echo "$data[id]";?>" class="form-control" readonly>
            
            <label for="name">Nama</label>
            <input type="text" id="name" name="name" value="<?php echo "$data[name]";?>" class="form-control" placeholder="Nama Lengkap" required>

            <label for="email">Email</label>
            <input type="text" id="email" name="email" value="<?php echo "$data[email]";?>" class="form-control" placeholder="name@example.com" required>

            <label for="phone">Phone</label>
            <input type="text" id="phone" name="phone" value="<?php echo "$data[phone]";?>" class="form-control" placeholder="+62XXX" required>

            <label for="role">Role</label>
            <select id="role" name="role" class="form-select" required>
                <option><?php echo "$data[role]";?></option>  
                <option value="admin">Admin</option>
                <option value="staff">Staff</option>
            </select>

            <label for="address">Alamat</label>
            <textarea name="address" id="address" name="address" value="<?php echo "$data[address]";?>" class="form-control" cols="100" rows="3" placeholder="Masukkan Alamat" required></textarea>

            <input class="btn btn-success mt-3" type="submit" name="tambah" value="Tambah Data">
        </form>
    </div>

    <?php
        if (isset($_POST['tambah'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $role = $_POST['role'];
            $address = $_POST['address'];

            $roleSelect = $_POST['role'];
            if ($role == 'admin') {
                $role = 'Admin';
            } if ($role == 'staff') {
                $role = 'Staff';
            }

            $sqlUpdate = "UPDATE users SET nama='$nama', email='$email', phone='$phone', role='$role', address='$address'
                        WHERE id='$id'";

            $queryUpdate = mysqli_query($conn, $sqlUpdate);

            header("location: index.php");
        }
    ?>
</body>
</html>