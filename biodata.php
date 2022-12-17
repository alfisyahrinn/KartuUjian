<?php
require 'proses/koneksi.php';
$nim = $_SESSION["nim"];
$query = mysqli_query($koneksi, "SELECT * FROM mahasiswa  
                                  INNER JOIN user ON mahasiswa.nim = user.nim
                                  WHERE mahasiswa.nim = $nim");

$user =  mysqli_fetch_assoc($query);
?>

<div class="container rounded bg-white mb-5">
  <div class="row">
    <?php if ($_SESSION["status"] == 2) : ?>
      <div class="alert alert-warning py-1" role="alert">
        Akun anda belum di verifikasi harap tunggu <br> admin memverifikasinya.
      </div>
    <?php endif ?>
    <div class="col-md-3 border-right">
      <div class="d-flex flex-column align-items-center text-center p-3 py-5">
        <?php if ($user["foto"] == null) : ?>
          <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
        <?php else : ?>
          <div class="d-flex justify-content-center ini">
            <img style="border-radius: 100%;" src="Source/img/biodata/<?= $user["foto"]; ?>" width="170" height="170">
          </div>
        <?php endif ?>
        <span class="font-weight-bold"><?= $user["nama"]; ?></span><span class="text-black-50"><?= $user["nim"]; ?></span><span> </span>
      </div>
    </div>
    <div class="col-md-9 border-right">
      <div class="p-3 py-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h4 class="text-right">Biodata</h4>
        </div>
        <div class="row mt-2">
          <div class="col-md-6 mt-2">
            <label class="labels">Nama</label>
            <input type="text" class="form-control" placeholder="first name" value="<?= $user["nama"]; ?>" readonly>
          </div>
          <div class="col-md-6 mt-2">
            <label class="labels">Username</label>
            <input type="text" class="form-control" placeholder="Username" value="<?= $user["username"]; ?>" readonly>
          </div>
          <div class="col-md-6 mt-2">
            <label class="labels">Nim</label>
            <input readonly type="text" class="form-control" value="<?= $user["nim"]; ?>" placeholder="Nim">
          </div>
          <div class="col-md-6 mt-2">
            <label class="labels">Nik</label>
            <input readonly type="text" class="form-control" value="<?= $user["nik"]; ?>" placeholder="Nik">
          </div>
          <div class="col-md-6 mt-2">
            <label class="labels">Tempat Lahir</label>
            <input readonly type="text" class="form-control" value="<?= $user["tempatLahir"]; ?>" placeholder="Tempat Lahir">
          </div>
          <div class="col-md-6 mt-2">
            <label class="labels">Tanggal Lahir</label>
            <input readonly type="text" class="form-control" value="<?= $user["tgl"]; ?>" placeholder="Tanggal Lahir">
          </div>
          <div class="col-md-6 mt-2">
            <label class="labels">Jenis Kelamin</label>
            <input readonly type="text" class="form-control" value="<?= $user["jenisKelamin"]; ?>" placeholder="Jenis Kelamin">
          </div>
          <div class="col-md-6 mt-2">
            <label class="labels">Nomor Hp</label>
            <input readonly type="text" class="form-control" value="<?= $user["nohp"]; ?>" placeholder="Nomor Hp">
          </div>
          <div class="col-md-6 mt-2">
            <label class="labels">Jurusan</label>
            <input readonly type="text" class="form-control" value="<?= $user["jurusan"]; ?>" placeholder="Jurusan">
          </div>
          <div class="col-md-6 mt-2">
            <label class="labels">Prodi</label>
            <input readonly type="text" class="form-control" value="<?= $user["prodi"]; ?>" placeholder="Prodi">
          </div>
          <div class="col-md-6 mt-2">
            <label class="labels">Kelas</label>
            <input readonly type="text" class="form-control" value="<?= $user["kelas"]; ?>" placeholder="Kelas">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>