<?php
require 'proses/koneksi.php';
$nim = $_SESSION["nim"];
$query = mysqli_query($koneksi, "SELECT * FROM persyaratan WHERE nim = $nim");

$cekGambar = mysqli_query($koneksi, "SELECT * FROM persyaratan 
WHERE	 nim = $nim AND 
(ukt IS NOT NULL AND pembimbing IS NOT NULL AND perpus IS NOT NULL) AND 
STATUS = 1 ");

$user =  mysqli_fetch_assoc($query);

function foto($name)
{
  //mengambil data dari $_FILES
  $namaFile = $_FILES["$name"]["name"];
  $size = $_FILES["$name"]["size"];
  $tmpName = $_FILES["$name"]["tmp_name"];
  $error = $_FILES["$name"]["error"];
  //Cek apakah foto ada di upload
  // 0 = ada, 4 = tidakada, -1=error;

  //cek apakah yang di upload foto atau bukan
  $fotoBenar = ['jpg', 'jpeg', 'png'];
  $ekstensiFoto = explode('.', $namaFile);
  $ekstensiFoto = strtolower(end($ekstensiFoto));
  // if (!in_array($ekstensiFoto, $fotoBenar)) {
  //   echo "
  //         <script>
  //         alert('Masukkna file jpg, jpeg atau png!');
  //         document.location='menu'
  //         </script>
  //     ";
  //   return false;
  // }

  //jika file foto terlalu besar
  // if ($size > 1000000) {
  //   echo "
  //           <script>
  //           alert('Ukuran foto kegedean Max 1mb');
  //           </script>
  //       ";
  //   return false;
  // }

  //lolos pengecekan gambar siap upload
  //generate nama file baru
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiFoto;
  move_uploaded_file($tmpName, 'Source/img/' . $namaFileBaru);
  return $namaFileBaru;
}
if (isset($_POST["upload"])) {
  // cek apakah ada gambar yang di upload
  if ($_FILES["ukt"]["error"] === 4) {
    $ukt = $user["ukt"];
  } else {
    $ukt = foto("ukt");
  }

  if ($_FILES["bimbingan"]["error"] === 4) {
    $bimbingan = $user["bimbingan"];
  } else {
    $bimbingan = foto("bimbingan");
  }

  if ($_FILES["perpus"]["error"] === 4) {
    $perpus = $user["perpus"];
  } else {
    $perpus = foto("perpus");
  }

  $result = mysqli_query($koneksi, "UPDATE persyaratan SET 
                                    ukt='$ukt', 
                                    pembimbing='$bimbingan',
                                    perpus = '$perpus'
                                    WHERE	nim = $nim");
  if ($result) {
    echo "
    <script>
    alert('Persyaratan berhasil di Upload')
    document.location='cetakKartu'
    </script>
    ";
  } else {
    echo "
    <script>
    alert('Gagal Upload Persyaratan')
    document.location='cetakKartu'
    </script>
    ";
  }
}
?>
<div class="wakwaw">
  <form class="form" action="" method="post" enctype="multipart/form-data">
    <div class="row">
      <p class="opacity-75">Syarat</p>
      <div class="col-md-4 mb-3">
        <?php if (empty($user["perpus"])) : ?>
          <p class="alert alert-warning p-0 m-0 text-center">Ukt Belum</p>
        <?php else : ?>
          <p class="opacity-50">Ukt</p>
          <img src="Source/img/<?= $user["ukt"]; ?>" width="100" alt="">
        <?php endif ?>
      </div>
      <div class="col-md-4 mb-3">
        <?php if (empty($user["perpus"])) : ?>
          <p class="alert alert-warning p-0 m-0 text-center">Pembimbing Belum</p>
        <?php else : ?>
          <p class="opacity-50">Pembimbing</p>
          <img src="Source/img/<?= $user["pembimbing"]; ?>" width="100" alt="">
        <?php endif ?>
      </div>
      <div class="col-md-4 mb-3">
        <?php if (empty($user["perpus"])) : ?>
          <p class="alert alert-warning p-0 m-0 text-center">Perpustakaan Belum</p>
        <?php else : ?>
          <p class="opacity-50">Perpustakaan</p>
          <img src="Source/img/<?= $user["perpus"]; ?>" width="100" alt="">
        <?php endif ?>
      </div>
      <div class="col-md-6 mb-3">
        <label for="formFileLg" class="form-label opacity-50">Bukti bayar Ukt</label>
        <input class="form-control form-control-lg" id="formFileLg" type="file" name="ukt" accept="image/*">
      </div>
      <div class="col-md-6 mb-3">
        <label for="formFileLg" class="form-label opacity-50">Bukti bimbing</label>
        <input class="form-control form-control-lg" id="formFileLg" type="file" name="bimbingan" accept="image/*">
      </div>
      <div class="col-md-6 mb-3">
        <label for="formFileLg" class="form-label opacity-50">Bukti Perpustakaan</label>
        <input class="form-control form-control-lg" id="formFileLg" type="file" name="perpus" accept="image/*">
      </div>
      <div class="col-md-6 mb-3">
        <label for="formFileLg" class="form-label opacity-50">Kehadiran</label>
        <input readonly value="<?= $user["hadir"]; ?>" class="form-control form-control-lg" id="formFileLg" type="number" </div>
      </div>
      <div class="col-md-6 mb-3">
        <button type="submit" name="upload" class="btn btn-primary">Kirim</button>
      </div>
  </form>
  <div class="row">
    <p class="opacity-75 mt-3">Cetak Kartu</p>
    <div class="col-md-12">
      <?php if (mysqli_num_rows($cekGambar) > 0) : ?>
        <!-- <a href="kartuUjian.php?nim=<?= $user["nim"]; ?>" class="btn btn-success">Cetak Kartu</a> -->
        <form action="kartuUjian.php" method="post">
          <input type="hidden" name="nim" value="<?= $user["nim"]; ?>">
          <button class="btn btn-success">Cetak Kartu</button>
        </form>
      <?php else : ?>
        <div class="alert alert-warning py-1" role="alert">
          Anda Masih perlu Melengkapi syarat syarat Untuk mencetak Kartu Ujian <br> jika sudah upload syarat tapi tombol cetak kartu belum <br> ada berarti syarat anda sedang di periksa
        </div>
      <?php endif ?>
    </div>
  </div>
</div>

<?php
$result = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nim=$nim");
$user = mysqli_fetch_assoc($result);
?>