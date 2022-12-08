<?php
require 'proses/koneksi.php';
if (empty($_SESSION["username"])) {
  header('location:login');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kartu Ujian</title>

  <!-- Java Script Data Table Jquery -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css" />

  <link href="Source/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- CSS -->
  <link rel="stylesheet" href="Source/css/neinek.css" type="text/css">
  <link rel="stylesheet" href="styleku.css">
</head>
<style>
  .text {
    color: #828ea5;
  }

  .text-active {
    color: #c060a1;
    font-weight: 700;
  }

  .text-active:hover {
    color: #c060a1;
  }

  .text:hover {
    color: #c060a1;
  }
</style>

<body>

  <div class="row">
    <!-- Sidebar -->
    <?php include 'Layout/sidebar.php' ?>
    <!-- End Sidebar -->

    <!-- <?php var_dump($_SESSION["usernameDecafe"]) ?> -->

    <!-- Content -->
    <div class="col-lg-10 p-5" style="background-color: #fff; border-radius: 40px 0px 0px 40px; height: 100vh;">
      <!-- navbar -->
      <?php include 'Layout/navbar.php' ?>
      <!-- end navbar -->

      <?php include $page ?>
      <!-- End Content -->
    </div>
  </div>


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="Source/bootstrap/js/bootstrap.js"></script>
  <script src="Source/bootstrap/js/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  <!-- Java Script Data Table Jquery -->
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
  <script>
    $(document).ready(function() {
      $('#table_id').DataTable();
    });
  </script>
</body>

</html>