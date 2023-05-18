<?php    
   include("koneksi.php");

   $id = $_GET['id'];

   $query = "delete from users where id = $id";
   
   if(mysqli_query($conn, $query)){
       header("Location: index.php");
   }else{
       header("Location: edit.php?id=$id");
   }

?>