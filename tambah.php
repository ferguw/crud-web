<?php
  // File tambah data ke database

  include("koneksi.php");


  // pokoknya inihagan menambah tu pang dah
  if (isset($_POST['submit'])) {

    // ini hagan meenerima hasil inputan di browser
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];


    //ini perintah memasuk akan data ke database
    $query = "INSERT INTO mahasiswa(`id`, `nama`, `jurusan`) VALUES (NULL, '$nama', '$jurusan')";

    $connect = mysqli_query($koneksi, $query);


    //ini pokoknya if else wara mencek berhasil kah kada
    if ($connect) {
      header("location:index.php");
      echo "Berhasil";
    }else {
      header("location:index.php");
      echo "Gagal";
    }
  }



?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create</title>
  </head>

  <body>

    <!-- jangan kada ingat di form ini ada namanya method pokoknya cari ja di internet hibak -->
    <form method="post">
      <label>Nama</label>
      <!-- nah di bagian name di input di bawah ini hagan mernerima hasil input pokoknya sama akan lawan $_POST di atas leh -->
        <input type="text" name="nama">

      <label>Jurusan</label>
        <select name="jurusan">
          <option value="TI">TI</option>
          <option value="SI">SI</option>
        </select>

      <button type="submit" name="submit">INPUT</button>
    </form>

  </body>
</html>
