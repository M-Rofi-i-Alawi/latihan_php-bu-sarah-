<?php
require_once('../koneksi.php');

// cek apakah ada id di URL
if (!isset($_GET['id'])) {
    die("Error: ID siswa tidak ditemukan.");
}

$id = $_GET['id'];

// hapus data siswa berdasarkan id
$hapus = mysqli_query($koneksi, "DELETE FROM tabel_siswa WHERE id=$id") 
         or die(mysqli_error($koneksi));

if ($hapus) {
    echo "<script>
            alert('Data siswa berhasil dihapus!');
            window.location='data_siswa.php';
          </script>";
} else {
    echo "<script>
            alert('Data siswa gagal dihapus!');
            window.location='data_siswa.php';
          </script>";
}
?>
