<html>
    <head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    </head>
    <body>

<?php
// Koneksi ke database
// require_once 'koneksi.php';
include "koneksi.php";

// Query untuk menampilkan data
$query = "SELECT * FROM products";

// Eksekusi query
$result = mysqli_query($conn, "SELECT * FROM products", MYSQLI_STORE_RESULT);
?>
 <!-- Tampilkan data -->


<table id="myTable">
<thead>
    <th>ID</th>
    <th>CATEGORY_ID</th>
    <th>NAMA</th>
    <th>DESKRIPSI</th>
    <th>PRICE</th>
    <th>STATUS</th>
    <th>CREATED_AT</th>
    <th>UPDATED_AT</th>
    <th>CREATED_BY</th>
    <th>VERIFIED_AT</th>
    <th>VERIFIED_BY</th>
</thead>
<tbody>
    <?php  
while ($row = mysqli_fetch_assoc($result)) : //mysqli_fetch_assoc
    ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['category_id'] ?></td>
        <td><?= $row['name'] ?></td>
        <td><?= $row['description'] ?></td>
        <td><?= $row['price'] ?></td>
        <td><?= $row['status'] ?></td>
        <td><?= $row['created_at'] ?></td>
        <td><?= $row['updated_at'] ?></td>
        <td><?= $row['created_by'] ?></td>
        <td><?= $row['verified_at'] ?></td>
        <td><?= $row['verified_by'] ?></td>
    </tr>
    
<?php endwhile; ?>

</tbody>

</table>

 <!-- Tutup koneksi -->
 <?php
mysqli_close($conn);
?>

</body>

<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</html>