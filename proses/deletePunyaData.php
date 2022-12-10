<?php
require 'koneksi.php';
if (isset($_POST["deleteData"])) {
  $nim = $_POST["nim"];
  $query = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nim = $nim");
  $row = mysqli_fetch_assoc($query);
  if ($row["nama"] == "admin") {
    echo "
    <script>
    alert('Admin tidak dapat di hapus HAHAHA')
    document.location='../data'
    </script>
    ";
  } else {
    $result = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE nim = $nim ");
    if ($result) {
      echo "
      <script>
      alert('Hapus data berhasil')
      document.location='../data'
      </script>
      ";
    } else {
      echo "
      <script>
      alert('Gagal Menghapus Data')
      document.location='../data'
      </script>
      ";
    }
  }
} else {
  echo "WOW HAHA";
}
