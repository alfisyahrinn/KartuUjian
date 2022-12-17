<?php
require 'proses/koneksi.php';
$jmlMhs = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
$blmAmbil = mysqli_query($koneksi, "SELECT * FROM persyaratan WHERE STATUS = 2");
$akunPending = mysqli_query($koneksi, "SELECT * FROM user WHERE STATUS = 2");
$hadir = mysqli_query($koneksi, "SELECT * FROM persyaratan WHERE hadir IS NULL");
?>

<div class="row">
  <div class="col-md-4" style="margin-bottom: 40px;">
    <div class="card-gaming">
      <div class="m-auto">
        <h1>Jumlah Mahasiswa</h1>
        <p class="text-center"><?= mysqli_num_rows($jmlMhs); ?></p>
      </div>
    </div>
  </div>
  <div class="col-md-4 " style="margin-bottom: 40px;">
    <div class="card-gaming">
      <div class="m-auto">
        <h1>Belum ambil Kartu</h1>
        <p class="text-center"><?= mysqli_num_rows($blmAmbil); ?></p>
      </div>
    </div>
  </div>
  <div class="col-md-4 " style="margin-bottom: 40px;">
    <div class="card-gaming">
      <div class="m-auto">
        <h1>Akun Pending</h1>
        <p class="text-center"><?= mysqli_num_rows($akunPending); ?></p>
      </div>
    </div>
  </div>
  <div class="col-md-4 " style="margin-bottom: 40px;">
    <div class="card-gaming">
      <div class="m-auto">
        <h1>Belum Isi daftar Hadir</h1>
        <p class="text-center"><?= mysqli_num_rows($hadir); ?></p>
      </div>
    </div>
  </div>
</div>