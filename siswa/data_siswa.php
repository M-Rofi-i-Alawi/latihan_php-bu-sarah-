<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Siswa</title>
</head>
<body>

<h1 align="center">Data Siswa</h1>

<table border="1" cellpadding="5" cellspacing="0" align="center">
  <tr>
    <th>NO</th>
    <th>Nama</th>
    <th>Umur</th>
    <th>Email</th>
    <th>Aksi</th>
  </tr>

  <?php 
    require_once('../koneksi.php');
    $data = mysqli_query($koneksi,"SELECT * FROM tabel_siswa");
    $no = 1;
    while($siswa = mysqli_fetch_assoc($data)) : ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $siswa['nama_siswa'] ?></td>
            <td><?= $siswa['umur'] ?></td>
            <td><?= $siswa['email'] ?></td>
            <td>
              <a href="edit_siswa.php?id=<?= $siswa['id']; ?>">Edit</a>
              <a href="hapus_siswa.php?id=<?= $siswa['id']; ?>" onclick="return confirm('Yakin mau hapus data ini?')">Delete</a>

            </td>
        </tr>
  <?php endwhile ?>
</table>

</body>
</html>
