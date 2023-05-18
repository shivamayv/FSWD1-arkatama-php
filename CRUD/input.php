<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>

<style>
  .form {
    margin: 10px auto;
    width: 400px;
    padding: 10px;
  }

  input[type=text], select, textarea {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  input[type=submit] {
    width: 100%;
    background-color: #04AA6D;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  input[type=submit]:hover {
    background-color: #04AA6D;
  }

  .div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
  }
</style>

<body>
  <table class="form">
    <form action="create.php" method="POST" class="div">
      <h2 align="center">Form Pengisian Produk</h2>
          <tr>
            <td>ID Produk</td>
            <td>:</td>
            <td><input type="text" name="id" class="input" value="<?= rand(0, 999999)?>"></input></td>
          </tr>    
          
          <tr>
            <td>Category ID</td>
            <td>:</td>
            <td><input type="text" name="category_id" class="input" value="<?= rand(0, 9)?>"></input></td>
          </tr>
          
          <tr>
            <td>Nama Produk</td>
            <td>:</td>
            <td><input type="text" name="name" class="input" required placeholder="Nama Produk"></input></td>
          </tr>
          
          <tr>
            <td>Deskripsi Produk</td>
            <td>:</td>
            <td><textarea id="description" name="description" placeholder="Masukkan Deskripsi Produk" style="height:100px"></textarea><br></td>
          </tr>
          
          <tr>
            <td>Harga Produk</td>
            <td>:</td>
            <td><input type="number" min="1000" max="1000000000000000" name="price" class="input" required placeholder="Harga Produk" style="width:100%"></input></td>
          </tr>
          
          <tr>
            <td>Status Produk</td>
            <td>:</td>
            <td>
              <select id="status" name="status" class="input">
                  <option>accepted</option>
                  <option>rejected</option>
                  <option>waiting</option>
              </select>
            </td>
          </tr>
          
          <tr>
            <td>Created at</td>
            <td>:</td>
            <td><input type="datetime-local" name="created_at" class="input"></input></td>
          </tr>
          
          <tr>
            <td>Updated at</td>
            <td>:</td>
            <td><input type="datetime-local" name="updated_at" class="input"></input></td>
          </tr>
          
          <tr>
            <td>Created by</td>
            <td>:</td>
            <td><input type="number" min="1" max="10" name="created_by" required placeholder="Dibuat Oleh" style="width:100%"></input></td>
          </tr>

          <tr>
            <td>Verified at</td>
            <td>:</td>
            <td><input type="datetime-local" name="verified_at" class="input"></input></td>
          </tr>

          <tr>
            <td>Verified by</td>
            <td>:</td>
            <td><input type="number" min="1" max="10" name="verified_by" required placeholder="Diverifikasi Oleh" style="width:100%"></input></td>
          </tr>

          <tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="Submit"></td>
          </tr>
    </form>
  </table>
</body>
</html>