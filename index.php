<?php
  // Ini file sagan menampilkan data pada MySQL Database

  // Ini perintah sagan memanggil file koneksi.php
  include("koneksi.php");

  // Ini adalah perintah untuk memanggil data dari database
  $query_tampil = "SELECT * FROM mahasiswa";

  // Ini untuk perintah menyambungkan $query dan $koneksi
  $connect = mysqli_query($koneksi, $query_tampil);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SHOW</title>
  </head>

  <body>

    <a href="tambah.php">Tambah Data</a>

    <br><br><br>

    <table border="1" cellpadding="10px">
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Action</th>
      </tr>

<?php
  // Hagan perulangan nomor ja
  $nomor = 1;

  // Hagan perulangan jadi data bertambah di database maka
  // ditampilan web ngikut di database
  while($data = mysqli_fetch_assoc($connect)){
?>

      <tr>
        <!-- Memprint data ke web dari database -->
        <td><?php echo $nomor; ?></td>
        <td><?php echo $data['nama'];?></td>
        <td><?php echo $data['jurusan']; ?></td>
        <td>
          <a href="edit.php?id=<?php echo $data['id'];?>">EDIT</a>
          |||
          <a href="hapus.php?id=<?php echo $data['id'];?>">HAPUS</a>
        </td>
      </tr>

<?php
// Mengakhiri perulangan
  $nomor++;
  }
?>

    </table>


  </body>
</html>
