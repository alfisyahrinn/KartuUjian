<?php
require 'koneksi.php';
if (isset($_POST["tambahData"])) {
  $nama = htmlspecialchars($_POST["nama"]);
  $username = htmlspecialchars($_POST["username"]);
  $level = htmlspecialchars($_POST["level"]);

  $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");

  if (mysqli_num_rows($query) > 0) {
    echo "
    <script>
    alert('Username Telah Di gunakan')
    document.location='../user'
    </script>
    ";
    exit();
  }

  $result = mysqli_query($koneksi, "INSERT INTO user (nama,username,level) VALUES
                                  ('$nama','$username',$level)");
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
