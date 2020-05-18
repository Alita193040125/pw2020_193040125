<?php
  $mahasiswa = 
  [
  [
    "nama"=>"Sadhika Galih",
    "nrp"=>"043040023",
    "email"=>"sadhikagalih@unpas.ac.id",
    "jurusan"=>"Teknik Informatika"
  ],
  [
    "nama"=>"Dody Ferdiansyah",
    "nrp"=>"1444040004",
    "email"=>"doddy@gmail",
    "jurusan"=>"Teknik Mesin"
  ]
  ]
?>

<?php
  $mahasiswa =  [
  [
   "nama"=>"Sadhika Galih",
    "nrp"=>"043040023",
    "email"=>"sadhikagalih@unpas.ac.id",
    "jurusan"=>"Teknik Informatika"
  ],
  [
    "nama"=>"Dody Ferdiansyah",
    "nrp"=>"1444040004",
    "email"=>"doddy@gmail",
    "jurusan"=>"Teknik Mesin"
  ]
  ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <table style="text-align=center;" border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>NO</th>
      <th>Nama</th>
      <th>NRP</th>
      <th>Email</th>
      <th>Jurusan</th>
    </tr>
  <?php $no = 1; ?>
  <?php foreach($mahasiswa as $mhs) : ?>
  <tr>
    <td><?= $no ?></td>
    <td><?= $mhs["nama"] ?></td>
    <td><?= $mhs["nrp"] ?></td>
    <td><?= $mhs["email"] ?></td>
    <td><?= $mhs["jurusan"] ?></td>
  </tr>
  <?php $no++ ?>
  <?php endforeach ?>
  </table>
</body>
</html>
