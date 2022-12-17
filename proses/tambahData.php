<?php
require 'koneksi.php';
if (isset($_POST["tambahData"])) {
  $nim = htmlspecialchars($_POST["nim"]);
  $username = htmlspecialchars($_POST["username"]);
  $level = htmlspecialchars($_POST["level"]);

  $query = mysqli_query($koneksi, "SELECT * FROM user
  WHERE nim ='$nim' OR username ='$username';");

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
  //insert ke mahasiswa
  mysqli_query($koneksi, "INSERT INTO mahasiswa (nim) VALUES ('$nim')");
  //insert ke persyaratan
  mysqli_query($koneksi, "INSERT INTO persyaratan (nim) VALUES ('$nim')");
  // insert ke user
  $result = mysqli_query($koneksi, "INSERT INTO user (nim,username,level,status) VALUES
                                  ('$nim','$username',$level,'1')");
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
