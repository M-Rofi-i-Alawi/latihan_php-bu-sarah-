<?php
require_once("../koneksi.php");

if (!isset($_GET['id'])) {
    die("ID tidak ditemukan!");
}
$id = intval($_GET['id']);

mysqli_query($koneksi, "DELETE FROM tabel_kelas WHERE id=$id") or die(mysqli_error($koneksi));

header("Location: data_kelas.php");
exit;
?>
