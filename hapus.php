<?php
  //File hapus pokoknya

  include('koneksi.php');

  // hagan mencari data supaya nyaman mehapusnya
  $id = $_GET['id'];

  // nginih perintah hapus
  $query_hapus = "DELETE FROM mahasiswa WHERE id = '$id'";

  $connect = mysqli_query($koneksi, $query_hapus);

  header('location:index.php');

?>
