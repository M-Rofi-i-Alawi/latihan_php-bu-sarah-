<?php
require_once("../koneksi.php");

if (!isset($_GET['id'])) {
    die("ID tidak ditemukan!");
}
$id = intval($_GET['id']);
$result = mysqli_query($koneksi, "SELECT * FROM tabel_kelas WHERE id=$id") or die(mysqli_error($koneksi));
$kelas = mysqli_fetch_assoc($result);

if (!$kelas) {
    die("Data kelas tidak ditemukan!");
}

if (isset($_POST['update'])) {
    $tingkat = $_POST['tingkat'];
    $jurusan = $_POST['jurusan'];
    $rombel  = $_POST['rombel'];

    mysqli_query($koneksi, "UPDATE tabel_kelas SET tingkat='$tingkat', jurusan='$jurusan', rombel='$rombel' WHERE id=$id")
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
    <title>Edit Kelas</title>
</head>
<body>
    <h1 align="center">Edit Kelas</h1>
    <form method="post" align="center">
    Tingkat: 
    <select name="tingkat" required>
        <option value="x" <?= $kelas['tingkat']=="x"?"selected":"" ?>>X</option>
        <option value="xi" <?= $kelas['tingkat']=="xi"?"selected":"" ?>>XI</option>
        <option value="xii" <?= $kelas['tingkat']=="xii"?"selected":"" ?>>XII</option>
    </select><br><br>   
    Jurusan: <input type="text" name="jurusan" value="<?= $kelas['jurusan'] ?>" required><br><br>
    Rombel: <input type="text" name="rombel" value="<?= $kelas['rombel'] ?>" required><br><br>
        <button type="submit" name="update">Update</button>
    </form>
</body>
</html>
