<?php
session_start();
require_once("koneksi.php");

if (isset($_POST['login'])) {
    $email = $_POST['email'];

    // cek ke database hanya berdasarkan email
    $query = mysqli_query($koneksi, 
        "SELECT * FROM tabel_siswa WHERE email='$email'"
    ) or die(mysqli_error($koneksi));

    $data = mysqli_fetch_assoc($query);

    if ($data) {
        // simpan nama siswa ke session
        $_SESSION['username'] = $data['nama_siswa']; 
        // langsung pindah ke halaman input siswa
        header("Location: siswa/tambah_siswa.php");
        exit;
    } else {
        echo "<script>alert('Email tidak ditemukan!');</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Login Siswa</title></head>
<body>
<h2>Login Siswa</h2>
<form method="post">
    Email: <input type="email" name="email" required><br>
    <button type="submit" name="login">Login</button>
</form>
</body>
</html>
