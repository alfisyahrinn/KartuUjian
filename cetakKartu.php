<?php
require 'proses/koneksi.php';
$nim = $_SESSION["nim"];
$query = mysqli_query($koneksi, "SELECT * FROM persyaratan WHERE nim = $nim");

$user =  mysqli_fetch_assoc($query);
?>
<div class="">
  <form class="form">
    <div class="row">
      <p class="opacity-75">Syarat</p>
      <div class="col-md-6 mb-3">
        <label for="formFileLg" class="form-label opacity-50">Bukti bayar Ukt</label>
        <input class="form-control form-control-lg" id="formFileLg" type="file">
      </div>
      <div class="col-md-6 mb-3">
        <label for="formFileLg" class="form-label opacity-50">Bukti bimbing</label>
        <input class="form-control form-control-lg" id="formFileLg" type="file">
      </div>
      <div class="col-md-6 mb-3">
        <label for="formFileLg" class="form-label opacity-50">Bukti Perpustakaan</label>
        <input class="form-control form-control-lg" id="formFileLg" type="file">
      </div>
      <div class="col-md-6 mb-3">
        <label for="formFileLg" class="form-label opacity-50">Kehadiran</label>
        <input readonly value="<?= $user["hadir"]; ?>" class="form-control form-control-lg" id="formFileLg" type="number">
      </div>
    </div>
  </form>
  <div class="row">
    <p class="opacity-75 mt-3">Cetak Kartu</p>
    <div class="col-md-12">
      <div class="alert alert-warning py-1" role="alert">
        Anda Masih perlu Melengkapi syarat syarat Untuk mencetak Kartu Ujian <br> jika sudah upload syarat tapi tombol cetak kartu belum <br> ada berarti syarat anda sedang di periksa
      </div>
    </div>
  </div>
</div>