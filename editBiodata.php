<?php
require 'proses/koneksi.php';
$nim = $_SESSION["nim"];
$query = mysqli_query($koneksi, "SELECT * FROM mahasiswa  
                                  INNER JOIN user ON mahasiswa.nim = user.nim
                                  WHERE mahasiswa.nim = $nim");

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
  move_uploaded_file($tmpName, 'Source/img/biodata/' . $namaFileBaru);
  return $namaFileBaru;
}
if (isset($_POST["simpan"])) {
  $nama = htmlspecialchars($_POST["nama"]);
  $nim = htmlspecialchars($_POST["nim"]);
  $nik = htmlspecialchars($_POST["nik"]);
  $tempatLahir = htmlspecialchars($_POST["tempatLahir"]);
  $tgl = htmlspecialchars($_POST["tgl"]);
  $jenisKelamin = htmlspecialchars($_POST["jenisKelamin"]);
  $nohp = htmlspecialchars($_POST["nohp"]);
  // $jurusan = htmlspecialchars($_POST["jurusan"]);
  $prodi = htmlspecialchars($_POST["prodi"]);
  $kelas = htmlspecialchars($_POST["kelas"]);
  $gambarLama = htmlspecialchars($_POST["gambarLama"]);

  if ($_FILES["foto"]["error"] === 4) {
    $foto = $gambarLama;
  } else {
    $foto = foto("foto");
  }





  $result = mysqli_query($koneksi, "UPDATE mahasiswa SET 
                                  foto='$foto',
                                  nama='$nama', 
                                  nim='$nim',
                                  nik='$nik',
                                  tempatLahir='$tempatLahir',
                                  tgl='$tgl',
                                  jenisKelamin='$jenisKelamin',
                                  nohp='$nohp',
                                  prodi='$prodi',
                                  kelas='$kelas'
                                  WHERE  nim=$nim;");

  if ($result) {
    echo "
    <script>
    alert('Biodata berhasil di Update')
    document.location='editBiodata'
    </script>
    ";
  } else {
    echo "
    <script>
    alert('Gagal Update Biodata')
    document.location='editBiodata'
    </script>
    ";
  }
}



?>

<div class="container rounded bg-white mb-5">
  <div class="row">
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
        <form action="" method="post" enctype="multipart/form-data">
          <div class="row mt-2">
            <div class="col-md-6 mt-2">
              <label class="labels">Nama</label>
              <input type="text" name="nama" class="form-control" placeholder="first name" value="<?= $user["nama"]; ?>">
              <input type="hidden" name="gambarLama" class="form-control" placeholder="first name" value="<?= $user["foto"]; ?>">
            </div>
            <div class="col-md-6 mt-2">
              <label class="labels">Username</label>
              <input type="text" name="username" class="form-control" placeholder="Username" value="<?= $user["username"]; ?>" readonly>
            </div>
            <div class="col-md-6 mt-2">
              <label class="labels">Nim</label>
              <input type="text" name="nim" class="form-control" value="<?= $user["nim"]; ?>" placeholder="Nim">
            </div>
            <div class="col-md-6 mt-2">
              <label class="labels">Nik</label>
              <input type="text" name="nik" class="form-control" value="<?= $user["nik"]; ?>" placeholder="Nik">
            </div>
            <div class="col-md-6 mt-2">
              <label class="labels">Tempat Lahir</label>
              <input type="text" name="tempatLahir" class="form-control" value="<?= $user["tempatLahir"]; ?>" placeholder="Tempat Lahir">
            </div>
            <div class="col-md-6 mt-2">
              <label class="labels">Tanggal Lahir</label>
              <input type="date" name="tgl" class="form-control" value="<?= $user["tgl"]; ?>" placeholder="Tahun-bulan-tanggal -> (2003-08-12)">
            </div>
            <div class="col-md-6 mt-2">
              <label class="labels">Jenis Kelamin</label>
              <input type="text" name="jenisKelamin" class="form-control" value="<?= $user["jenisKelamin"]; ?>" placeholder="Jenis Kelamin">
            </div>
            <div class="col-md-6 mt-2">
              <label class="labels">Nomor Hp</label>
              <input type="text" name="nohp" class="form-control" value="<?= $user["nohp"]; ?>" placeholder="Nomor Hp">
            </div>
            <div class="col-md-6 mt-2">
              <label class="labels">Jurusan</label>
              <input type="text" name="jurusan" class="form-control" value="TIK" placeholder="Jurusan" disabled>
            </div>
            <div class="col-md-6 mt-2">
              <label class="labels">Prodi</label>
              <!-- <input type="text" name="prodi" class="form-control" value="<?= $user["prodi"]; ?>" placeholder="Prodi"> -->
              <select class="form-select" name="prodi" id="prodi">
                <?php
                $data = array("TI", "TRKJ", "Multimedia");
                foreach ($data as $key => $value) {
                  if ($user["prodi"] == $key + 1) {
                    echo "<option selected value='$value'>$value</option>";
                  } else {
                    echo "<option value='$value'>$value</option>";
                  }
                }
                ?>

                <!-- <option value="TI">TI</option>
                <option value="TRKJ">TRKJ</option>
                <option value="Multimedia">Multimedia</option> -->
              </select>
            </div>
            <div class="col-md-6 mt-2">
              <label class="labels">Kelas</label>
              <input type="text" name="kelas" class="form-control" value="<?= $user["kelas"]; ?>" placeholder="Kelas">
            </div>
            <div class="col-md-6 mt-2">
              <label class="labels">Foto Profile</label>
              <input class="form-control form-control-md" id="formFileLg" type="file" name="foto" accept="image/*">
            </div>
            <div class="col-md-12 mt-3">
              <button class="btn btn-primary" name="simpan">Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>