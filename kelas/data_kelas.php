<?php
require_once("../koneksi.php");
$data = mysqli_query($koneksi, "SELECT * FROM tabel_kelas") or die(mysqli_error($koneksi));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kelas</title>
</head>
<body>
    <h1 align="center">Data Kelas</h1>
    <div align="center">
        <a href="tambah_kelas.php" align="center">Tambah Kelas</a>
    </div><br>
    <table border="1" cellpadding="5" cellspacing="0" align="center">
        <tr>
            <th>No</th>
            <th>Tingkat</th>
            <th>Jurusan</th>
            <th>Rombel</th>
            <th>Aksi</th>
        </tr>
        <?php $i=1; while($kelas = mysqli_fetch_assoc($data)): ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $kelas['tingkat'] ?></td>
                <td><?= $kelas['jurusan'] ?></td>
                <td><?= $kelas['rombel'] ?></td>
                <td>
                    <a href="edit_kelas.php?id=<?= $kelas['id'] ?>">Edit</a> | 
                    <a href="hapus_kelas.php?id=<?= $kelas['id'] ?>" onclick="return confirm('Yakin hapus?')">Delete</a>
                </td>
            </tr>
        <?php endwhile ?>
</body>
</html>
