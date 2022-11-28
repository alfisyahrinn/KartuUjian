<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kartu Ujian</title>


  <link href="Source/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- CSS -->
  <link rel="stylesheet" href="Source/css/index.css">
  <link rel="stylesheet" href="Source/css/style.css">
</head>

<body style="height: 100vh;">
  <div class="d-flex ju">
    <?php include 'Layout/sidebar.php' ?>
    <div class="right ps-5">
      <div class="akun d-flex align-items-center gap-2">
        <img src=" Source/icon/bintang.png">
        <h5 class="akun-h5"> Admin </h5>
        <img src="Source/icon/arrow.png">
      </div>
      <div class="row">
        <div class="col-4 " style="margin-bottom: 40px;">
          <div class="card">
            <div class="m-auto">
              <h1>Jumlah Mahasiswa</h1>
              <p class="text-center">100</p>
            </div>
          </div>
        </div>
        <div class="col-4 " style="margin-bottom: 40px;">
          <div class="card">
            <div class="m-auto">
              <h1>Belum ambil Kartu</h1>
              <p class="text-center">20</p>
            </div>
          </div>
        </div>
        <div class="col-4 " style="margin-bottom: 40px;">
          <div class="card">
            <div class="m-auto">
              <h1>Pending</h1>
              <p class="text-center">12</p>
            </div>
          </div>
        </div>
        <div class="col-4 " style="margin-bottom: 40px;">
          <div class="card">
            <div class="m-auto">
              <h1>Jumlah Mahasiswa</h1>
              <p class="text-center">100</p>
            </div>
          </div>
        </div>
        <div class="col-4 " style="margin-bottom: 40px;">
          <div class="card">
            <div class="m-auto">
              <h1>Belum ambil Kartu</h1>
              <p class="text-center">20</p>
            </div>
          </div>
        </div>
        <div class="col-4 " style="margin-bottom: 40px;">
          <div class="card">
            <div class="m-auto">
              <h1>Pending</h1>
              <p class="text-center">12</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="Source/bootstrap/js/bootstrap.js"></script>
  <script src="Source/bootstrap/js/popper.min.js"></script>
</body>

</html>