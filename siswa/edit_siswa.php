<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
</head>
<body>
    <h1>Edit Siswa</h1>

    <?php
    require_once('../koneksi.php');

    // ambil id dari URL
    if (!isset($_GET['id'])) {
        die("Error: ID siswa tidak ditemukan.");
    }
    $id = $_GET['id'];

    // ambil data siswa berdasarkan id
    $result = mysqli_query($koneksi, "SELECT * FROM tabel_siswa WHERE id=$id");
    $data_siswa = mysqli_fetch_assoc($result);

    if (!$data_siswa) {
        die("Error: Data siswa dengan ID $id tidak ditemukan.");
    }

    // pengecekan ketika form dikirim
    if (isset($_POST['nama_siswa'])) {
        $nama  = $_POST['nama_siswa'];
        $umur  = $_POST['umur'];
        $email = $_POST['email'];

        // update data berdasarkan id
        $update = mysqli_query(
            $koneksi,
            "UPDATE tabel_siswa 
             SET nama_siswa='$nama', umur='$umur', email='$email' 
             WHERE id=$id"
        ) or die(mysqli_error($koneksi));

        if ($update) {
            echo "<script>alert('Data berhasil diupdate!'); window.location='data_siswa.php';</script>";
        }
    }
    ?>

    <form action="" method="post">
        <input type="text" name="nama_siswa" id="nama_siswa" value="<?= $data_siswa['nama_siswa'] ?>"><br>
        <input type="number" name="umur" id="umur" value="<?= $data_siswa['umur'] ?>"><br>
        <input type="email" name="email" id="email" value="<?= $data_siswa['email'] ?>"><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
