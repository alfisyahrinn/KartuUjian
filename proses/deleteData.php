<?php
require 'koneksi.php';
if (isset($_POST["deleteData"])) {
  $id = $_POST["id"];
  $query = mysqli_query($koneksi, "SELECT * FROM user WHERE id = $id");
  $row = mysqli_fetch_assoc($query);
  if ($row["username"] == "admin") {
    echo "
    <script>
    alert('Admin tidak dapat di hapus HAHAHA')
    document.location='../user'
    </script>
    ";
  } else {
    $result = mysqli_query($koneksi, "DELETE FROM user WHERE id=$id");
    if ($result) {
      echo "
      <script>
      alert('Hapus data berhasil')
      document.location='../user'
      </script>
      ";
    } else {
      echo "
      <script>
      alert('Gagal Menghapus Data')
      document.location='../user'
      </script>
      ";
    }
  }
} else {
  echo "WOW HAHA";
}
