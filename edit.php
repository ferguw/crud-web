<?php
  // File edit pokoknya

  include("koneksi.php");

  $id = $_GET['id'];

  //ini sama kaya index.php alias menampilkan data haja
  $query_tampil = "SELECT * FROM mahasiswa WHERE id = $id";
  $connect_tampil = mysqli_query($koneksi, $query_tampil);
  $data = mysqli_fetch_assoc($connect_tampil);

  //ini sama aja lawan tambah.php tapi di tambahi di bagian $query_tambah
  if (isset($_POST['submit'])) {

    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];

    $query_tambah = "UPDATE mahasiswa SET nama = '$nama', jurusan = '$jurusan' WHERE id = '$id';";

    $connect = mysqli_query($koneksi, $query_tambah);

    if ($connect) {
      echo "Berhasil";
      header("location:index.php");
    }else {
      echo "Gagal";
      header("location:index.php");
    }
  }



?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit</title>
  </head>

  <body>

    <form method="post">
      <label>Nama</label>
        <input type="text" name="nama" value="<?php echo $data['nama']; ?>">

      <label>Jurusan</label>
        <select name="jurusan">
          <option value="<?php echo $data['jurusan']; ?>"><?php echo $data['jurusan']; ?></option>
          <option disabled> === </option>
          <option value="TI">TI</option>
          <option value="SI">SI</option>
        </select>

      <button type="submit" name="submit">INPUT</button>
    </form>

  </body>
</html>
