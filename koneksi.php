<?php
$koneksi = mysqli_connect("localhost", "root", "", "latihan_php");

// cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
