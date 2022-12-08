<?php
require 'koneksi.php';
if (isset($_POST["updateData"])) {
  $id = $_POST["id"];
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

  $result = mysqli_query($koneksi, "UPDATE user SET 
                                  nama='$nama', 
                                  username='$username', 
                                  level=$level
                                  WHERE  id=$id;");

  if ($result) {
    echo "
    <script>
    alert('Data berhasil di Update')
    document.location='../user'
    </script>
    ";
  } else {
    echo "
    <script>
    alert('Gagal Update Data')
    document.location='../user'
    </script>
    ";
  }
} else {
  echo "WOW";
}
