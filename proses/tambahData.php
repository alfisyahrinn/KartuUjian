<?php
require 'koneksi.php';
if (isset($_POST["tambahData"])) {
  $nama = htmlspecialchars($_POST["nama"]);
  $nim = htmlspecialchars($_POST["nim"]);
  $username = htmlspecialchars($_POST["username"]);
  $level = htmlspecialchars($_POST["level"]);

  $query = mysqli_query($koneksi, "SELECT * FROM user
  WHERE nim ='$nim' OR username ='$username';");

  // var_dump($nama);
  // var_dump($nim);
  // var_dump(mysqli_num_rows($query));
  // die;

  if (mysqli_num_rows($query) > 0) {
    echo "
    <script>
    alert('Username Atau Nim Telah Di gunakan')
    document.location='../user'
    </script>
    ";
    exit();
  }

  $wow = mysqli_query($koneksi, "INSERT INTO mahasiswa (nim,nama) VALUES ('$nim','$nama')");

  $result = mysqli_query($koneksi, "INSERT INTO user (nim,nama,username,level) VALUES
                                  ('$nim','$nama','$username',$level)");
  if ($result) {
    echo "
    <script>
    alert('Data berhasil di Tambahkan')
    document.location='../user'
    </script>
    ";
  } else {
    echo "
    <script>
    alert('Gagal menambahkan Data')
    document.location='../user'
    </script>
    ";
  }
} else {
  echo "WOW";
}
