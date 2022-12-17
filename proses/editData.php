<?php
require 'koneksi.php';
if (isset($_POST["updateData"])) {
  $id = $_POST["id"];
  $username = htmlspecialchars($_POST["username"]);
  $level = htmlspecialchars($_POST["level"]);
  $status = htmlspecialchars($_POST["status"]);


  $result = mysqli_query($koneksi, "UPDATE user SET 
                                  username='$username', 
                                  level=$level,
                                  status=$status
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
