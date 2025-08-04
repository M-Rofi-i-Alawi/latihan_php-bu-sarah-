<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan PHP</title>
</head>
<body>

<?php

$siswa = [
  ['nama' => 'Nisa',   'umur' => 16, 'email' => 'nisa@gmail.com'],
  ['nama' => 'Arkan',  'umur' => 16, 'email' => 'arkan@gmail.com'],
  ['nama' => 'Fajar',  'umur' => 17, 'email' => 'fajar@gmail.com'],
  ['nama' => 'Farrel', 'umur' => 18, 'email' => 'farrel@gmail.com'],
  ['nama' => 'Rheivan','umur' => 15, 'email' => 'rheivan@gmail.com'],
];

foreach ($siswa as $s) {
  echo $s['nama'] . '<br>';
  echo $s['umur'] . '<br>';
  echo $s['email'] . '<br>';
}
?>

<h1><?= $nama ?></h1>

<table border="1" cellpadding="5" cellspacing="0">
  <tr>
    <th>NO</th>
    <th>Nama</th>
    <th>Umur</th>
    <th>Email</th>
  </tr>

  <?php $i = 1; foreach ($siswa as $s) : ?>
  <tr>
    <td><?= $i++ ?></td>
    <td><?= $s['nama'] ?></td>
    <td><?= $s['umur'] ?></td>
    <td><?= $s['email'] ?></td>
  </tr>
  <?php endforeach; ?>
</table>

</body>
</html>