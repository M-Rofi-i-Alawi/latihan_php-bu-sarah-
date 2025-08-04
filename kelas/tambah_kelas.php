<?php
require_once("../koneksi.php");

if (isset($_POST['simpan'])) {
    $tingkat = $_POST['tingkat'];
    $jurusan = $_POST['jurusan'];
    $rombel  = $_POST['rombel'];

    mysqli_query($koneksi, "INSERT INTO tabel_kelas (tingkat, jurusan, rombel) VALUES ('$tingkat','$jurusan','$rombel')")
        or die(mysqli_error($koneksi));

    header("Location: data_kelas.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah kelas</title>
</head>
<body>
    <h1 align="center">Tambah Kelas</h1>
    <form method="post" align="center">
        Tingkat: 
        <select name="tingkat" required>
            <option value="">-- Pilih --</option>
            <option value="x">X</option>
            <option value="xi">XI</option>
            <option value="xii">XII</option>
        </select><br><br>
        Jurusan: <input type="text" name="jurusan" required><br><br>
        Rombel: <input type="text" name="rombel" required><br><br>
        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>
