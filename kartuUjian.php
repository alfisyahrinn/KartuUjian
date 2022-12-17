<?php
require 'proses/koneksi.php';
$nim = $_POST["nim"];

$result = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nim=$nim");
$user = mysqli_fetch_assoc($result);
?>
<script>
  window.print()
</script>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kartu Anggota</title>

  <!-- Bootstrap CSS -->
  <link href="Source/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- Logo Tittle -->
  <link rel="icon" href="Source/img/icon/logo.png" type="image/x-icon">
  <!-- Css -->
  <link rel="stylesheet" href="Source/css/kartuUjian.css">
</head>

<body>
  <div class="an">
    <div class="name mt-5">
      <div class="top">
        <h5>Kartu Ujian</h5>
      </div>
      <div class="d-flex justify-content-center ini">
        <img class="wadaw" src="Source/img/biodata/<?= $user['foto']; ?>" width="170" height="170">
      </div>
      <div class="text mt-4">
        <ul>
          <li class="itu">Nim : <span class="ini"><?= $user["nim"]; ?></span></li>
          <li class="itu">Nama : <span class="ini"><?= $user["nama"]; ?></span></li>
          <li class="itu">TTL : <span class="ini"><?= $user["tempatLahir"]; ?>, <?= $user["tgl"]; ?></span></li>
          <li class="itu">Prodi : <span class="ini"><?= $user["prodi"]; ?></span></li>
          <li class="itu">Kelas : <span class="ini"><?= $user["kelas"]; ?></span></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="bootstrap/js/bootstrap.js"></script>
  <script src="bootstrap/js/popper.min.js"></script>
</body>

</html>