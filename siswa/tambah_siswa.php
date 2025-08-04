<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Siswa</title>
</head>
<body>
  <h1 align="center">Form Pendaftaran Siswa</h1>

  <form action="" method="post" style="width:300px; margin:auto;">
    <label for="nama_siswa">Nama:</label><br>
    <input type="text" name="nama_siswa" id="nama_siswa" required><br><br>

    <label for="umur">Umur:</label><br>
    <input type="number" name="umur" id="umur" required><br><br>

    <label for="email">Email:</label><br>
    <input type="email" name="email" id="email" required><br><br>

    <button type="submit" name="submit">Daftar</button>
  </form>

  <?php
  // cek apakah tombol submit ditekan
  if (isset($_POST['submit'])) {
      require_once('../koneksi.php');

      $nama  = $_POST['nama_siswa'];
      $umur  = $_POST['umur'];
      $email = $_POST['email'];

      // masukkan data ke tabel
      $insert = mysqli_query($koneksi, "INSERT INTO tabel_siswa VALUES ('','$nama','$umur','$email')");

      if ($insert) {
          echo "<script>
                  alert('Pendaftaran berhasil!');
                  window.location='data_siswa.php';
                </script>";
      } else {
          echo "Gagal menambahkan data: " . mysqli_error($koneksi);
      }
  }
  ?>
</body>
</html>
